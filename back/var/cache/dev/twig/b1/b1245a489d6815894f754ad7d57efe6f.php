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

/* category/services.html.twig */
class __TwigTemplate_49db1eb1b128bb6043a1fb8689e72d12 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/services.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/services.html.twig", 1);
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

        yield "Services pour ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
    <h2 class=\"text-2xl font-bold mb-6 text-center text-gray-800\">
        Services pour la catégorie : <span class=\"text-indigo-600\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "</span>
    </h2>

    ";
        // line 11
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 14
                yield "                <div class=\"bg-gray-50 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300\">
                    <img src=\"https://via.placeholder.com/400x200\" alt=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 15), "html", null, true);
                yield "\" class=\"w-full h-48 object-cover\">
                    <div class=\"p-6\">
                        <h3 class=\"text-lg font-bold text-indigo-600\">";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 17), "html", null, true);
                yield "</h3>
                        <p class=\"text-gray-600 mt-2\">";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 18), 0, 100) . "..."), "html", null, true);
                yield "</p>
                        <p class=\"text-indigo-600 font-bold mt-4\">Prix : ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 19), "html", null, true);
                yield " €</p>
                        <a href=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                yield "\"
                           class=\"mt-4 inline-block text-white bg-indigo-600 px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-300\">
                            Voir le service
                        </a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "        </div>
    ";
        } else {
            // line 29
            yield "        <p class=\"text-center text-gray-600 mt-6\">Aucun service n'est disponible pour cette catégorie.</p>
    ";
        }
        // line 31
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "category/services.html.twig";
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
        return array (  146 => 31,  142 => 29,  138 => 27,  125 => 20,  121 => 19,  117 => 18,  113 => 17,  108 => 15,  105 => 14,  101 => 13,  98 => 12,  96 => 11,  90 => 8,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Services pour {{ category.name }}{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-6\">
    <h2 class=\"text-2xl font-bold mb-6 text-center text-gray-800\">
        Services pour la catégorie : <span class=\"text-indigo-600\">{{ category.name }}</span>
    </h2>

    {% if services|length > 0 %}
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
            {% for service in services %}
                <div class=\"bg-gray-50 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300\">
                    <img src=\"https://via.placeholder.com/400x200\" alt=\"{{ service.title }}\" class=\"w-full h-48 object-cover\">
                    <div class=\"p-6\">
                        <h3 class=\"text-lg font-bold text-indigo-600\">{{ service.title }}</h3>
                        <p class=\"text-gray-600 mt-2\">{{ service.description|slice(0, 100) ~ '...' }}</p>
                        <p class=\"text-indigo-600 font-bold mt-4\">Prix : {{ service.price }} €</p>
                        <a href=\"{{ path('service_detail', { 'id': service.id }) }}\"
                           class=\"mt-4 inline-block text-white bg-indigo-600 px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-300\">
                            Voir le service
                        </a>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <p class=\"text-center text-gray-600 mt-6\">Aucun service n'est disponible pour cette catégorie.</p>
    {% endif %}
</div>
{% endblock %}
", "category/services.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/category/services.html.twig");
    }
}
