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

/* freelancer/show.html.twig */
class __TwigTemplate_47b1acd838434baa8dd15943403cb91d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancer/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "freelancer/show.html.twig", 1);
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

        yield "Détails du Freelancer";
        
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
        yield "<h1>Détails du Freelancer</h1>

<p><strong>Email :</strong> ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["freelancer"]) || array_key_exists("freelancer", $context) ? $context["freelancer"] : (function () { throw new RuntimeError('Variable "freelancer" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), "html", null, true);
        yield "</p>
<p><strong>Portfolio :</strong> <a href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["freelancer"]) || array_key_exists("freelancer", $context) ? $context["freelancer"] : (function () { throw new RuntimeError('Variable "freelancer" does not exist.', 9, $this->source); })()), "portfolio", [], "any", false, false, false, 9), "html", null, true);
        yield "\" target=\"_blank\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["freelancer"]) || array_key_exists("freelancer", $context) ? $context["freelancer"] : (function () { throw new RuntimeError('Variable "freelancer" does not exist.', 9, $this->source); })()), "portfolio", [], "any", false, false, false, 9), "html", null, true);
        yield "</a></p>
<p><strong>Disponible :</strong> ";
        // line 10
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["freelancer"]) || array_key_exists("freelancer", $context) ? $context["freelancer"] : (function () { throw new RuntimeError('Variable "freelancer" does not exist.', 10, $this->source); })()), "available", [], "any", false, false, false, 10)) ? ("Oui") : ("Non"));
        yield "</p>

<a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("freelancer_list");
        yield "\" class=\"text-blue-500\">Retour à la liste des Freelancers</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "freelancer/show.html.twig";
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
        return array (  104 => 12,  99 => 10,  93 => 9,  89 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Freelancer{% endblock %}

{% block body %}
<h1>Détails du Freelancer</h1>

<p><strong>Email :</strong> {{ freelancer.email }}</p>
<p><strong>Portfolio :</strong> <a href=\"{{ freelancer.portfolio }}\" target=\"_blank\">{{ freelancer.portfolio }}</a></p>
<p><strong>Disponible :</strong> {{ freelancer.available ? 'Oui' : 'Non' }}</p>

<a href=\"{{ path('freelancer_list') }}\" class=\"text-blue-500\">Retour à la liste des Freelancers</a>
{% endblock %}
", "freelancer/show.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/freelancer/show.html.twig");
    }
}
