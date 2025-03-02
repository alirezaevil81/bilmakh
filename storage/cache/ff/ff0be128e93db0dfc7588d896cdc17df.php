<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* index.twig */
class __TwigTemplate_ae2a55e653a4df75ec5f343111b55036 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layouts/master.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/master.twig", "index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "صفحه اصلی";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <section dir=\"rtl\" id=\"main\" class=\"vh-100 d-flex flex-column align-items-center justify-content-center\">
        <div id=\"main-div\" class=\"container bg-body-tertiary bg-opacity-75 w-100 py-5 text-center border border-2 border-primary rounded-5\">
            <img class=\"d-block mx-auto mb-4\"
                 src=\"assets/img/logo.png\" alt=\"\" width=\"72\">
            <h1 class=\"display-5 fw-bold text-white\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["welcome"] ?? null), "html", null, true);
        yield "</h1>
            <div class=\"col-lg-6 mx-auto\">
                <p class=\"lead mb-4 text-white-50\">تست MMPI یکی از معروف‌ترین تست‌های شخصیت‌شناسی است. این تست به شما کمک می‌کند تا پروفایل کامل شخصیت خود را همراه با تفسیر دقیق شاخص‌های اعتباری و بالینی دریافت کنید. تعداد سوالات این تست 10 سوال است.</p>
                <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                    <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield "\" type=\"button\" class=\"btn ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color_btn"] ?? null), "html", null, true);
        yield " btn-lg px-4 gap-3\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_btn"] ?? null), "html", null, true);
        yield "</a>
                    <a href=\"/users\" type=\"button\" class=\"btn btn-outline-secondary btn-lg px-4\">لیست کاربران</a>
                </div>
            </div>
        </div>
    </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  83 => 14,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/master.twig' %}

{% block title %}صفحه اصلی{% endblock %}

{% block content %}
    <section dir=\"rtl\" id=\"main\" class=\"vh-100 d-flex flex-column align-items-center justify-content-center\">
        <div id=\"main-div\" class=\"container bg-body-tertiary bg-opacity-75 w-100 py-5 text-center border border-2 border-primary rounded-5\">
            <img class=\"d-block mx-auto mb-4\"
                 src=\"assets/img/logo.png\" alt=\"\" width=\"72\">
            <h1 class=\"display-5 fw-bold text-white\">{{ welcome }}</h1>
            <div class=\"col-lg-6 mx-auto\">
                <p class=\"lead mb-4 text-white-50\">تست MMPI یکی از معروف‌ترین تست‌های شخصیت‌شناسی است. این تست به شما کمک می‌کند تا پروفایل کامل شخصیت خود را همراه با تفسیر دقیق شاخص‌های اعتباری و بالینی دریافت کنید. تعداد سوالات این تست 10 سوال است.</p>
                <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                    <a href=\"{{ action }}\" type=\"button\" class=\"btn {{ color_btn }} btn-lg px-4 gap-3\">{{ text_btn }}</a>
                    <a href=\"/users\" type=\"button\" class=\"btn btn-outline-secondary btn-lg px-4\">لیست کاربران</a>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "index.twig", "/home/alireza/PhpstormProjects/bilmakh/resources/views/index.twig");
    }
}
