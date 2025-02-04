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

/* admin/manage_services.html.twig */
class __TwigTemplate_f03c9425cb302d3d399966338bd8163a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/manage_services.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/manage_services.html.twig", 1);
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

        yield "Gérer les Services";
        
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
        yield "<div class=\"container mx-auto py-8\">
    <h1 class=\"text-3xl font-bold text-gray-800 mb-6\">Liste des services</h1>
    <table class=\"min-w-full border border-gray-300 bg-white shadow rounded-lg\">
        <thead class=\"bg-gray-200\">
            <tr>
                <th class=\"px-6 py-3 text-left text-sm font-medium text-gray-800\">Titre</th>
                <th class=\"px-6 py-3 text-left text-sm font-medium text-gray-800\">Prix</th>
                <th class=\"px-6 py-3 text-left text-sm font-medium text-gray-800\">Créateur</th>
                <th class=\"px-6 py-3 text-center text-sm font-medium text-gray-800\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 19
            yield "                <tr class=\"border-t border-gray-300\">
                    <td class=\"px-6 py-4\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 21), "html", null, true);
            yield " €</td>
                    <td class=\"px-6 py-4\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["service"], "userService", [], "any", false, false, false, 22), "email", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4 text-center\">
                        <form method=\"post\" action=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_service", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce service ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_service_" . CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 25))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600\">
                                Supprimer
                            </button>
                        </form>

                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        return "admin/manage_services.html.twig";
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
        return array (  138 => 34,  123 => 25,  119 => 24,  114 => 22,  110 => 21,  106 => 20,  103 => 19,  99 => 18,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gérer les Services{% endblock %}

{% block body %}
<div class=\"container mx-auto py-8\">
    <h1 class=\"text-3xl font-bold text-gray-800 mb-6\">Liste des services</h1>
    <table class=\"min-w-full border border-gray-300 bg-white shadow rounded-lg\">
        <thead class=\"bg-gray-200\">
            <tr>
                <th class=\"px-6 py-3 text-left text-sm font-medium text-gray-800\">Titre</th>
                <th class=\"px-6 py-3 text-left text-sm font-medium text-gray-800\">Prix</th>
                <th class=\"px-6 py-3 text-left text-sm font-medium text-gray-800\">Créateur</th>
                <th class=\"px-6 py-3 text-center text-sm font-medium text-gray-800\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for service in services %}
                <tr class=\"border-t border-gray-300\">
                    <td class=\"px-6 py-4\">{{ service.title }}</td>
                    <td class=\"px-6 py-4\">{{ service.price }} €</td>
                    <td class=\"px-6 py-4\">{{ service.userService.email }}</td>
                    <td class=\"px-6 py-4 text-center\">
                        <form method=\"post\" action=\"{{ path('admin_delete_service', {'id': service.id}) }}\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce service ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_service_' ~ service.id) }}\">
                            <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600\">
                                Supprimer
                            </button>
                        </form>

                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "admin/manage_services.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/admin/manage_services.html.twig");
    }
}
