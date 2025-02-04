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

/* service/detail.html.twig */
class __TwigTemplate_b25afa7ac9cbd50b7af2bf5d8dfcfeae extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "service/detail.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"bg-white shadow-lg rounded-lg p-6\">
    <h1 class=\"text-3xl font-bold text-indigo-600\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
    <p class=\"mt-4 text-gray-600\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), "html", null, true);
        yield "</p>
    <p class=\"mt-4 text-lg font-semibold text-indigo-600\">Prix : ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 9, $this->source); })()), "price", [], "any", false, false, false, 9), "html", null, true);
        yield " €</p>

    ";
        // line 11
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 11, $this->source); })()), "demoUrl", [], "any", false, false, false, 11))) {
            // line 12
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 12, $this->source); })()), "demoUrl", [], "any", false, false, false, 12), "html", null, true);
            yield "\" class=\"block mt-4 text-blue-500 hover:underline\">
            Voir la démo
        </a>
    ";
        }
        // line 16
        yield "
    <!-- Section de réservation -->
    <div class=\"mt-6\">
        ";
        // line 19
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            yield "            <p class=\"text-red-500 font-bold\">Vous devez être connecté pour réserver ce service.</p>
            <a href=\"";
            // line 21
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"text-blue-500 underline\">
                Se connecter
            </a>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 24, $this->source); })()), "userService", [], "any", false, false, false, 24))) {
            // line 25
            yield "            <!-- Si l'utilisateur connecté est le créateur du service -->
            <p class=\"text-red-500 font-bold\">Vous ne pouvez pas réserver votre propre service.</p>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["service"] ?? null), "reservation", [], "any", true, true, false, 27) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 27, $this->source); })()), "reservation", [], "any", false, false, false, 27)))) {
            // line 28
            yield "            <!-- Si le service est déjà réservé -->
            <p class=\"text-red-500 font-bold\">Ce service a déjà été réservé.</p>
        ";
        } else {
            // line 31
            yield "            <!-- Bouton de réservation -->
            <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_reserve", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\"
               class=\"px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition-all duration-300\">
                Réserver ce service
            </a>
        ";
        }
        // line 37
        yield "    </div>

    <!-- Section de paiement -->
    <div class=\"mt-6\">
        ";
        // line 41
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            yield "            <p class=\"text-red-500 font-bold\">Vous devez être connecté pour effectuer un paiement.</p>
            <a href=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"text-blue-500 underline\">
                Se connecter
            </a>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 46, $this->source); })()), "userService", [], "any", false, false, false, 46))) {
            // line 47
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_checkout", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\"
               class=\"px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition-all duration-300\">
                Payer maintenant (";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 49, $this->source); })()), "price", [], "any", false, false, false, 49), "html", null, true);
            yield " €)
            </a>
        ";
        }
        // line 52
        yield "    </div>
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
        return "service/detail.html.twig";
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
        return array (  182 => 52,  176 => 49,  170 => 47,  168 => 46,  162 => 43,  159 => 42,  157 => 41,  151 => 37,  143 => 32,  140 => 31,  135 => 28,  133 => 27,  129 => 25,  127 => 24,  121 => 21,  118 => 20,  116 => 19,  111 => 16,  103 => 12,  101 => 11,  96 => 9,  92 => 8,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ service.title }}{% endblock %}

{% block body %}
<div class=\"bg-white shadow-lg rounded-lg p-6\">
    <h1 class=\"text-3xl font-bold text-indigo-600\">{{ service.title }}</h1>
    <p class=\"mt-4 text-gray-600\">{{ service.description }}</p>
    <p class=\"mt-4 text-lg font-semibold text-indigo-600\">Prix : {{ service.price }} €</p>

    {% if service.demoUrl is not empty %}
        <a href=\"{{ service.demoUrl }}\" class=\"block mt-4 text-blue-500 hover:underline\">
            Voir la démo
        </a>
    {% endif %}

    <!-- Section de réservation -->
    <div class=\"mt-6\">
        {% if not app.user %}
            <p class=\"text-red-500 font-bold\">Vous devez être connecté pour réserver ce service.</p>
            <a href=\"{{ path('app_login') }}\" class=\"text-blue-500 underline\">
                Se connecter
            </a>
        {% elseif app.user == service.userService %}
            <!-- Si l'utilisateur connecté est le créateur du service -->
            <p class=\"text-red-500 font-bold\">Vous ne pouvez pas réserver votre propre service.</p>
        {% elseif service.reservation is defined and service.reservation is not empty %}
            <!-- Si le service est déjà réservé -->
            <p class=\"text-red-500 font-bold\">Ce service a déjà été réservé.</p>
        {% else %}
            <!-- Bouton de réservation -->
            <a href=\"{{ path('service_reserve', { id: service.id }) }}\"
               class=\"px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition-all duration-300\">
                Réserver ce service
            </a>
        {% endif %}
    </div>

    <!-- Section de paiement -->
    <div class=\"mt-6\">
        {% if not app.user %}
            <p class=\"text-red-500 font-bold\">Vous devez être connecté pour effectuer un paiement.</p>
            <a href=\"{{ path('app_login') }}\" class=\"text-blue-500 underline\">
                Se connecter
            </a>
        {% elseif app.user != service.userService %}
            <a href=\"{{ path('service_checkout', { id: service.id }) }}\"
               class=\"px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition-all duration-300\">
                Payer maintenant ({{ service.price }} €)
            </a>
        {% endif %}
    </div>
</div>
{% endblock %}
", "service/detail.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/service/detail.html.twig");
    }
}
