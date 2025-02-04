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

/* freelancer/index.html.twig */
class __TwigTemplate_6f147dbebab581316650d0d7c019ed9e extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "freelancer/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des Freelancers";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<h1>Liste des Freelancers</h1>

<table class=\"table-auto border-collapse border border-gray-200 w-full mt-5\">
    <thead>
        <tr>
            <th class=\"border border-gray-300 px-4 py-2\">Nom</th>
            <th class=\"border border-gray-300 px-4 py-2\">Email</th>
            <th class=\"border border-gray-300 px-4 py-2\">Portfolio</th>
            <th class=\"border border-gray-300 px-4 py-2\">Disponible</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["freelancers"]) || array_key_exists("freelancers", $context) ? $context["freelancers"] : (function () { throw new RuntimeError('Variable "freelancers" does not exist.', 18, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["freelancer"]) {
            // line 19
            yield "            <tr>
                <td class=\"border border-gray-300 px-4 py-2\">Freelancer ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                <td class=\"border border-gray-300 px-4 py-2\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["freelancer"], "email", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                <td class=\"border border-gray-300 px-4 py-2\">
                    <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["freelancer"], "portfolio", [], "any", false, false, false, 23), "html", null, true);
            yield "\" target=\"_blank\">Portfolio</a>
                </td>
                <td class=\"border border-gray-300 px-4 py-2\">
                    ";
            // line 26
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["freelancer"], "available", [], "any", false, false, false, 26)) ? ("Oui") : ("Non"));
            yield "
                </td>
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
        unset($context['_seq'], $context['_key'], $context['freelancer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "    </tbody>
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "freelancer/index.html.twig";
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
        return array (  152 => 30,  134 => 26,  128 => 23,  123 => 21,  119 => 20,  116 => 19,  99 => 18,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Freelancers{% endblock %}

{% block body %}
<h1>Liste des Freelancers</h1>

<table class=\"table-auto border-collapse border border-gray-200 w-full mt-5\">
    <thead>
        <tr>
            <th class=\"border border-gray-300 px-4 py-2\">Nom</th>
            <th class=\"border border-gray-300 px-4 py-2\">Email</th>
            <th class=\"border border-gray-300 px-4 py-2\">Portfolio</th>
            <th class=\"border border-gray-300 px-4 py-2\">Disponible</th>
        </tr>
    </thead>
    <tbody>
        {% for freelancer in freelancers %}
            <tr>
                <td class=\"border border-gray-300 px-4 py-2\">Freelancer {{ loop.index }}</td>
                <td class=\"border border-gray-300 px-4 py-2\">{{ freelancer.email }}</td>
                <td class=\"border border-gray-300 px-4 py-2\">
                    <a href=\"{{ freelancer.portfolio }}\" target=\"_blank\">Portfolio</a>
                </td>
                <td class=\"border border-gray-300 px-4 py-2\">
                    {{ freelancer.available ? 'Oui' : 'Non' }}
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
{% endblock %}
", "freelancer/index.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/freelancer/index.html.twig");
    }
}
