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

/* admin/manage_users.html.twig */
class __TwigTemplate_f4659da5fd027604ac7b99bdfc0bdf40 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/manage_users.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/manage_users.html.twig", 1);
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

        yield "Gérer les utilisateurs";
        
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
    <h1 class=\"text-2xl font-bold mb-4\">Liste des utilisateurs</h1>

    <table class=\"table-auto w-full border-collapse border border-gray-200\">
        <thead>
            <tr>
                <th class=\"border border-gray-300 px-4 py-2\">ID</th>
                <th class=\"border border-gray-300 px-4 py-2\">Email</th>
                <th class=\"border border-gray-300 px-4 py-2\">Rôle</th>
                <th class=\"border border-gray-300 px-4 py-2\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            yield "                <tr>
                    <td class=\"border border-gray-300 px-4 py-2\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                    <td class=\"border border-gray-300 px-4 py-2\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                    <td class=\"border border-gray-300 px-4 py-2\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 23), ", "), "html", null, true);
            yield "</td>
                    <td class=\"border border-gray-300 px-4 py-2\">
                        <a href=\"#\" class=\"text-blue-500 hover:underline\">Modifier</a>
                        <a href=\"#\" class=\"text-red-500 hover:underline\">Supprimer</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "        </tbody>
    </table>
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
        return "admin/manage_users.html.twig";
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
        return array (  128 => 30,  115 => 23,  111 => 22,  107 => 21,  104 => 20,  100 => 19,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gérer les utilisateurs{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-6\">
    <h1 class=\"text-2xl font-bold mb-4\">Liste des utilisateurs</h1>

    <table class=\"table-auto w-full border-collapse border border-gray-200\">
        <thead>
            <tr>
                <th class=\"border border-gray-300 px-4 py-2\">ID</th>
                <th class=\"border border-gray-300 px-4 py-2\">Email</th>
                <th class=\"border border-gray-300 px-4 py-2\">Rôle</th>
                <th class=\"border border-gray-300 px-4 py-2\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
                <tr>
                    <td class=\"border border-gray-300 px-4 py-2\">{{ user.id }}</td>
                    <td class=\"border border-gray-300 px-4 py-2\">{{ user.email }}</td>
                    <td class=\"border border-gray-300 px-4 py-2\">{{ user.roles|join(', ') }}</td>
                    <td class=\"border border-gray-300 px-4 py-2\">
                        <a href=\"#\" class=\"text-blue-500 hover:underline\">Modifier</a>
                        <a href=\"#\" class=\"text-red-500 hover:underline\">Supprimer</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "admin/manage_users.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/admin/manage_users.html.twig");
    }
}
