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

/* signup.twig */
class __TwigTemplate_c23551b23ec28b0560c659a8adbe993f extends Template
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
        $this->parent = $this->loadTemplate("layouts/master.twig", "signup.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "شروع";
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
        yield "    <section id=\"main\" class=\"vh-100 d-flex flex-column align-items-center justify-content-center\">
        <div class=\"alert alert-danger ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hidden"] ?? null), "html", null, true);
        yield "\" role=\"alert\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
        yield "</div>
        <form dir=\"rtl\" class=\"bg-body-tertiary bg-opacity-50 p-5 rounded-5 d-flex flex-column gap-2 justify-content-center align-items-center\" action=\"/start\" method=\"post\">
            <img class=\"mb-4 mx-auto\" src=\"assets/img/logo.png\" alt=\"\" width=\"72\">
            <div class=\"form-floating\">
                <input name=\"name\" type=\"text\" minlength=\"3\" pattern=\"[آ-ی ]+\" class=\"form-control\" id=\"text\" placeholder=\"فارسی بنویس\" required>
                <label for=\"floatingInput\">اسم شما؟</label>
            </div>
            <div class=\"form-floating\">
                <input name=\"family\" type=\"text\" minlength=\"3\" pattern=\"[آ-ی ]+\" class=\"form-control\" id=\"text\" placeholder=\"فارسی بنویس\" required>
                <label for=\"floatingInput\">فامیل شما؟</label>
            </div>
            <br>
            <button class=\"btn btn-primary w-100 py-2\" type=\"submit\">برو بریم</button>
        </form>
    </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "signup.twig";
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
        return array (  73 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/master.twig' %}

{% block title %}شروع{% endblock %}

{% block content %}
    <section id=\"main\" class=\"vh-100 d-flex flex-column align-items-center justify-content-center\">
        <div class=\"alert alert-danger {{ hidden }}\" role=\"alert\">{{ message }}</div>
        <form dir=\"rtl\" class=\"bg-body-tertiary bg-opacity-50 p-5 rounded-5 d-flex flex-column gap-2 justify-content-center align-items-center\" action=\"/start\" method=\"post\">
            <img class=\"mb-4 mx-auto\" src=\"assets/img/logo.png\" alt=\"\" width=\"72\">
            <div class=\"form-floating\">
                <input name=\"name\" type=\"text\" minlength=\"3\" pattern=\"[آ-ی ]+\" class=\"form-control\" id=\"text\" placeholder=\"فارسی بنویس\" required>
                <label for=\"floatingInput\">اسم شما؟</label>
            </div>
            <div class=\"form-floating\">
                <input name=\"family\" type=\"text\" minlength=\"3\" pattern=\"[آ-ی ]+\" class=\"form-control\" id=\"text\" placeholder=\"فارسی بنویس\" required>
                <label for=\"floatingInput\">فامیل شما؟</label>
            </div>
            <br>
            <button class=\"btn btn-primary w-100 py-2\" type=\"submit\">برو بریم</button>
        </form>
    </section>
{% endblock %}", "signup.twig", "/home/alireza/PhpstormProjects/bilmakh/resources/views/signup.twig");
    }
}
