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

/* question.twig */
class __TwigTemplate_9be47006cb1e98aa855bf5d50c09fd58 extends Template
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
        // line 3
        $context["num1"] = Twig\Extension\CoreExtension::random($this->env->getCharset(), 1);
        // line 4
        $context["num2"] = Twig\Extension\CoreExtension::random($this->env->getCharset(), 1);
        // line 1
        $this->parent = $this->loadTemplate("layouts/master.twig", "question.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    <section id=\"main\" class=\"bg-body-tertiary vh-100 d-flex align-items-center justify-content-center\">
        <form action=\"/switch\" method=\"POST\" dir=\"rtl\">
            <div class=\"d-flex flex-column align-items-center justify-content-center\">
                <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "img", [], "any", false, false, false, 12), "html", null, true);
        yield "\" width=\"300px\" class=\"rounded rounded-5\" alt=\"\">
                <h3>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "question", [], "any", false, false, false, 13), "html", null, true);
        yield "</h3>
            </div>
            <select required name=\"score\" class=\"form-select\" size=\"2\">
                <option value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["num1"] ?? null), "html", null, true);
        yield "\" >";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "option1", [], "any", false, false, false, 16), "html", null, true);
        yield "</option>
                <option value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["num2"] ?? null), "html", null, true);
        yield "\" >";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "option2", [], "any", false, false, false, 17), "html", null, true);
        yield "</option>
            </select>
            <br>
            <button class=\"btn btn-primary w-100 py-2 w-25\" type=\"submit\">سوال بعدی</button>
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
        return "question.twig";
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
        return array (  96 => 17,  90 => 16,  84 => 13,  80 => 12,  75 => 9,  68 => 8,  57 => 6,  52 => 1,  50 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/master.twig' %}

{% set num1 = random(1) %}
{% set num2 = random(1) %}

{% block title %}{{ question.title }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"bg-body-tertiary vh-100 d-flex align-items-center justify-content-center\">
        <form action=\"/switch\" method=\"POST\" dir=\"rtl\">
            <div class=\"d-flex flex-column align-items-center justify-content-center\">
                <img src=\"{{ question.img }}\" width=\"300px\" class=\"rounded rounded-5\" alt=\"\">
                <h3>{{ question.question }}</h3>
            </div>
            <select required name=\"score\" class=\"form-select\" size=\"2\">
                <option value=\"{{ num1 }}\" >{{ question.option1 }}</option>
                <option value=\"{{ num2 }}\" >{{ question.option2 }}</option>
            </select>
            <br>
            <button class=\"btn btn-primary w-100 py-2 w-25\" type=\"submit\">سوال بعدی</button>
        </form>
    </section>
{% endblock %}", "question.twig", "/home/alireza/PhpstormProjects/bilmakh/resources/views/question.twig");
    }
}
