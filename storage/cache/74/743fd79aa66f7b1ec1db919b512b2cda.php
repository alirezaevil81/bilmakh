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

/* users.twig */
class __TwigTemplate_c06b0e185188b460e599a76d750fb5c0 extends Template
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
        $this->parent = $this->loadTemplate("layouts/master.twig", "users.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "کاربران";
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
        <div class=\"table-responsive h-50 rounded-2 border border-2 border-primary\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">نام و نام خانوادگی</th>
                    <th scope=\"col\">امتیاز</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            yield "                    <tr ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 18) == ($context["name"] ?? null))) {
                yield "class=\"table-primary\"";
            }
            yield ">
                        <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 21
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 21) == ($context["name"] ?? null))) {
                // line 22
                yield "                                (شما) ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 22), "html", null, true);
                yield "
                            ";
            } else {
                // line 24
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 24), "html", null, true);
                yield "
                            ";
            }
            // line 26
            yield "                        </td>
                        <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "score", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "                </tbody>
            </table>
        </div>
        <a href=\"/\" class=\"btn btn-info mt-3\">بازگشت</a>
    </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "users.twig";
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
        return array (  146 => 30,  129 => 27,  126 => 26,  120 => 24,  114 => 22,  112 => 21,  107 => 19,  100 => 18,  83 => 17,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/master.twig' %}

{% block title %}کاربران{% endblock %}

{% block content %}
    <section dir=\"rtl\" id=\"main\" class=\"vh-100 d-flex flex-column align-items-center justify-content-center\">
        <div class=\"table-responsive h-50 rounded-2 border border-2 border-primary\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">نام و نام خانوادگی</th>
                    <th scope=\"col\">امتیاز</th>
                </tr>
                </thead>
                <tbody>
                {% for user in users %}
                    <tr {% if user.name == name %}class=\"table-primary\"{% endif %}>
                        <td>{{ loop.index }}</td>
                        <td>
                            {% if user.name == name %}
                                (شما) {{ user.name }}
                            {% else %}
                                {{ user.name }}
                            {% endif %}
                        </td>
                        <td>{{ user.score }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <a href=\"/\" class=\"btn btn-info mt-3\">بازگشت</a>
    </section>
{% endblock %}", "users.twig", "/home/alireza/PhpstormProjects/bilmakh/resources/views/users.twig");
    }
}
