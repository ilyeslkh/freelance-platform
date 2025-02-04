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

/* admin/index.html.twig */
class __TwigTemplate_9bc10d61b6029e56030c588ad7388ad0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        yield "Tableau de bord admin";
        
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
        yield "<div class=\"container mx-auto px-4 py-6\">
    <h1 class=\"text-2xl font-bold mb-4\">Tableau de bord admin</h1>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <div class=\"bg-white shadow p-6 rounded\">
            <h2 class=\"text-lg font-bold\">Gérer les utilisateurs</h2>
            <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_manage_users");
        yield "\" class=\"text-indigo-500 hover:underline\">Voir les utilisateurs</a>
        </div>
        <div class=\"bg-white shadow p-6 rounded\">
            <h2 class=\"text-lg font-bold\">Gérer les services</h2>
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_manage_services");
        yield "\" class=\"text-indigo-500 hover:underline\">Voir les services</a>
        </div>
        <div class=\"bg-white shadow p-6 rounded\">
            <h2 class=\"text-lg font-bold\">Gérer les annonces</h2>
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_manage_jobs");
        yield "\" class=\"text-indigo-500 hover:underline\">Voir les annonces</a>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/index.html.twig";
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
        return array (  107 => 20,  100 => 16,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord admin{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-6\">
    <h1 class=\"text-2xl font-bold mb-4\">Tableau de bord admin</h1>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <div class=\"bg-white shadow p-6 rounded\">
            <h2 class=\"text-lg font-bold\">Gérer les utilisateurs</h2>
            <a href=\"{{ path('admin_manage_users') }}\" class=\"text-indigo-500 hover:underline\">Voir les utilisateurs</a>
        </div>
        <div class=\"bg-white shadow p-6 rounded\">
            <h2 class=\"text-lg font-bold\">Gérer les services</h2>
            <a href=\"{{ path('admin_manage_services') }}\" class=\"text-indigo-500 hover:underline\">Voir les services</a>
        </div>
        <div class=\"bg-white shadow p-6 rounded\">
            <h2 class=\"text-lg font-bold\">Gérer les annonces</h2>
            <a href=\"{{ path('admin_manage_jobs') }}\" class=\"text-indigo-500 hover:underline\">Voir les annonces</a>
        </div>
    </div>
</div>
{% endblock %}
", "admin/index.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/admin/index.html.twig");
    }
}
