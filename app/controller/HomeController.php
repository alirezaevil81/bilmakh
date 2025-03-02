<?php

namespace Alireza\Bilmakh\controller;

use Alireza\Bilmakh\core\View;
use Alireza\Bilmakh\model\Question;
use Alireza\Bilmakh\model\User;

class HomeController
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['name'])) {
            $welcome = 'سلام' . PHP_EOL .$_SESSION['name']. PHP_EOL . 'عزیز';
            if ($_SESSION['page'] == 12) {
                $color_btn = 'btn-info';
                $text_btn = 'مشاهده امتیاز';
                $action = '/end';
            }else {
                $color_btn = 'btn-primary';
                $text_btn = 'ادامه تست';
                $action = '/switch';
            }
        } else {
            $welcome = 'سلام خوش آمدید به این تست';
            $color_btn = 'btn-success';
            $text_btn = 'شروع تست';
            $action = '/signup';
        }
        View::render('index.twig',[
            "welcome" => $welcome,
            "color_btn" => $color_btn,
            "text_btn" => $text_btn,
            "action" => $action
        ]);
    }

    public function users()
    {
        $users = User::orderBy('score', 'DESC')->get();
        session_start();
        $name = $_SESSION['name'] ?? '';
        View::render('users.twig', [
            'users' => $users,
            'name' => $name,
        ]);
    }

    public function signup()
    {
        session_start();
        $message = $_SESSION['message'] ?? '';
        $hidden = isset($_SESSION['message']) ? '' : 'd-none';
        if (isset($_SESSION['message'])) {
            unset($_SESSION['message']);
        }
        View::render('signup.twig',[
            "message" => $message,
            "hidden" => $hidden
        ]);
    }

    public function start()
    {
        session_start();
        if (isset($_POST['name']) && isset($_POST['family'])) {
            $fullname = trim($_POST['name'] . ' ' . $_POST['family']);

            if (empty($fullname)) {
                $_SESSION['message'] = 'مقادیر نمی‌تواند خالی باشد';
                header("Location: /signup");
                exit();
            }

            $userExists = User::where('name', $fullname)->exists();

            if ($userExists) {
                $_SESSION['message'] = 'کاربری قبلاً با این مشخصات ثبت‌نام کرده است';
                header("Location: /signup");
                exit();
            }

            $_SESSION['name'] = $fullname;
            $_SESSION['score'] = 0;
            $_SESSION['page'] = 1;

            $this->switch();
            exit();
        } else {
            $_SESSION['message'] = 'مقادیر نمی‌تواند خالی باشد';
            header("Location: /signup");
            exit();
        }
    }

    public function restart()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();
            session_unset();
        }
        $this->switch();
        exit;
    }

    public function end()
    {
        session_start();
        $name = $_SESSION['name'];
        $score = $_SESSION['score'];
        if (isset($_SESSION['page'])) {
            if ($_SESSION['page'] != 11 and $_SESSION['page'] != 12) {
                header('Location: ../logic/switcher.php');
            }
        }else {
            header('Location: ../index.php');
        }
        $message = '';

        switch (true) {
            case ($score >= 1 && $score <= 3):
                $message = "بیانگر علائم افسردگی، غم و اندوه و ناامیدی است. این فرد ممکن است احساس بی ارزشی، بی انگیزگی و افکار منفی داشته باشد. نشان دهنده سطح بالای اضطراب، نگرانی و تنش عصبی. این فرد ممکن است علائمی مانند بی قراری، تحریک پذیری، مشکل در تمرکز و خواب آشفته را تجربه کند. نشان دهنده علائم جسمانی مرتبط با استرس، مانند سردرد، درد معده و خستگی است. این فرد ممکن است به دنبال توجه و حمایت اطرافیان باشد." . "<br>" . "<b>تجویز:رفتن به گذشته با ماشین زمان و دادن کاندوم به پدرتان برای جلوگیری از بدنیا آمدن شما</b>";
                break;

            case ($score >= 3 && $score <= 6):
                $message = "نشان دهنده علائم وسواس فکری-اجباری، مانند افکار وسواسی، رفتارهای اجباری و ترس از دست دادن کنترل است. بیانگر علائم جسمانی مرتبط با استرس، مانند سردرد، درد معده و خستگی است. این فرد ممکن است به دنبال توجه و حمایت اطرافیان باشد. نشان دهنده سطح متوسط اضطراب و نگرانی است." . "<br>" . "<b>تجویز:شیاف کردن 10 عدد اسفتامینوفن برای آرام شدن شما</b>";
                break;

            case ($score >= 6 && $score <= 10):
                $message = "نشان دهنده گرایش به نقش های مردانه سنتی، مانند قاطعیت، استقلال و رقابت است. بیانگر تمایل به رفتارهای ضد اجتماعی، قانون شکنی و عدم مسئولیت پذیری است. این فرد ممکن است به دنبال جلب توجه و تحریک باشد. نشان دهنده سطح متوسط افسردگی است. این فرد ممکن است گاه به گاه احساس غم و اندوه و ناامیدی کند." . "<br>" . "<b>تجویز:شما افسردگی دارید و نیاز است تا بیایید حالتان را خوب کنیم</b>";
                break;

            default:
                $message = "امتیاز وارد شده معتبر نیست.";
                break;
        }
        View::render('end.twig',[
            "name" => $name,
            "score" => $score,
            "message" => $message
        ]);
    }

    public function question($id)
    {
        session_start();
        if ($id == $_SESSION['page']) {
        $question = Question::find($id);
        View::render('question.twig', [
            'question' => $question,
        ]);
        }else{
            $this->switch();
        }
    }

    public function switch()
    {
        session_start();
        if (isset($_POST['score'])){
            $_SESSION['score'] += $_POST['score'];
            $_SESSION['page'] += 1;
        }
        $page = $_SESSION['page'];
        switch ($_SESSION['page']) {
            case 1:
                header('Location: /question/'.$page);
                exit();
            case 2:
                header('Location: /question/'.$page);
                exit();
            case 3:
                header('Location: /question/'.$page);
                exit();
            case 4:
                header('Location: /question/'.$page);
                exit();
            case 5:
                header('Location: /question/'.$page);
                exit();
            case 6:
                header('Location: /question/'.$page);
                exit();
            case 7:
                header('Location: /question/'.$page);
                exit();
            case 8:
                header('Location: /question/'.$page);
                exit();
            case 9:
                header('Location: /question/'.$page);
                exit();
            case 10:
                header('Location: /question/'.$page);
                exit();
            case 11:
                User::create([
                    'name' => $_SESSION['name'],
                    'score' => $_SESSION['score'],
                ]);
                $_SESSION['page'] += 1;
            case 12:
                header('Location: /end');
                exit();
            default:
                header('Location: /');
                exit();
        }
    }
}