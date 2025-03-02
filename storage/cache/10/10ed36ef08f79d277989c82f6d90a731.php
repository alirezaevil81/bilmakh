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

/* end.twig */
class __TwigTemplate_3fdf99a6c49f80efdba3abefb5b701af extends Template
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
        $this->parent = $this->loadTemplate("layouts/master.twig", "end.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "پایان";
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
        yield "    <section dir=\"rtl\" id=\"main\" class=\"bg-body-tertiary vh-100 d-flex align-items-center justify-content-center\">
        <div class=\"text-center w-50\">
            <h5>نام: <span>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "</span></h5>
            <h5>امتیاز: <span>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["score"] ?? null), "html", null, true);
        yield "</span></h5>
            <p>";
        // line 10
        yield ($context["message"] ?? null);
        yield "</p>
            <form action=\"/restart\" method=\"post\">
                <button class=\"btn btn-danger\" type=\"submit\">شروع دوباره</button>
            </form>
            <br>
            <a href=\"/\" class=\"btn btn-info\">صفحه اصلی</a>
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
        return "end.twig";
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
        return array (  82 => 10,  78 => 9,  74 => 8,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/master.twig' %}

{% block title %}پایان{% endblock %}

{% block content %}
    <section dir=\"rtl\" id=\"main\" class=\"bg-body-tertiary vh-100 d-flex align-items-center justify-content-center\">
        <div class=\"text-center w-50\">
            <h5>نام: <span>{{ name }}</span></h5>
            <h5>امتیاز: <span>{{ score }}</span></h5>
            <p>{{ message|raw }}</p>
            <form action=\"/restart\" method=\"post\">
                <button class=\"btn btn-danger\" type=\"submit\">شروع دوباره</button>
            </form>
            <br>
            <a href=\"/\" class=\"btn btn-info\">صفحه اصلی</a>
        </div>
    </section>
{% endblock %}", "end.twig", "/home/alireza/PhpstormProjects/bilmakh/resources/views/end.twig");
    }
}
