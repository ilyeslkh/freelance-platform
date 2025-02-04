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

/* service/list.html.twig */
class __TwigTemplate_8cebbcdac63a79beb62e0e7807de89d3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "service/list.html.twig", 1);
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

        yield "Liste des Services";
        
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
    <!-- En-tête -->
    <div class=\"flex justify-between items-center mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Nos Services</h1>
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_new");
        yield "\" class=\"flex items-center text-white bg-indigo-600 px-4 py-2 rounded hover:bg-indigo-700 transition duration-300\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
            </svg>
            Créer un service
        </a>
    </div>

    <!-- Liste des services -->
    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 20, $this->source); })()), "data", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 21
            yield "            <div class=\"relative bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl hover:scale-105 transition duration-300 group\">
                <img src=\"https://via.placeholder.com/400x200\" alt=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 22), "html", null, true);
            yield "\" class=\"w-full h-48 object-cover\">
                <div class=\"p-4\">
                    <h2 class=\"text-lg font-bold text-indigo-600\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 24), "html", null, true);
            yield "</h2>
                    <p class=\"mt-2 text-gray-600\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 25), 0, 100) . "..."), "html", null, true);
            yield "</p>
                    <p class=\"mt-2 text-indigo-600 font-semibold\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 26), "html", null, true);
            yield " €</p>
                    <a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"mt-4 inline-block bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition duration-300\">
                        Voir le service
                    </a>

                    <!-- Bouton Supprimer visible uniquement pour les administrateurs ou le propriétaire -->
                    ";
            // line 32
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "userService", [], "any", false, false, false, 32) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32))))) {
                // line 33
                yield "                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce service ?');\" class=\"mt-4\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 34))), "html", null, true);
                yield "\">
                            <button class=\"bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300\">
                                Supprimer
                            </button>
                        </form>
                    ";
            }
            // line 40
            yield "                </div>

                <!-- Effet de décoration au survol -->
                <div class=\"absolute inset-0 bg-indigo-100 opacity-0 group-hover:opacity-20 transition duration-300 pointer-events-none\"></div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "    </div>

    <!-- Pagination -->
    <div class=\"mt-8 flex justify-center\">
        <nav class=\"inline-flex space-x-2\">
            <!-- Page précédente -->
            ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 52, $this->source); })()), "previousPage", [], "any", false, false, false, 52)) {
            // line 53
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_list", ["page" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 53, $this->source); })()), "previousPage", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\"
                   class=\"px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100\">
                    &laquo; Précédent
                </a>
            ";
        } else {
            // line 58
            yield "                <span class=\"px-4 py-2 bg-gray-200 border border-gray-300 rounded text-gray-500\">&laquo; Précédent</span>
            ";
        }
        // line 60
        yield "
            <!-- Pages numérotées -->
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 62, $this->source); })()), "totalPages", [], "any", false, false, false, 62)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 63
            yield "                ";
            if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 63, $this->source); })()), "currentPage", [], "any", false, false, false, 63))) {
                // line 64
                yield "                    <span class=\"px-4 py-2 bg-indigo-500 text-white rounded\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</span>
                ";
            } else {
                // line 66
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_list", ["page" => $context["page"]]), "html", null, true);
                yield "\"
                       class=\"px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100\">
                        ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "
                    </a>
                ";
            }
            // line 71
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "
            <!-- Page suivante -->
            ";
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 74, $this->source); })()), "nextPage", [], "any", false, false, false, 74)) {
            // line 75
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_list", ["page" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 75, $this->source); })()), "nextPage", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\"
                   class=\"px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100\">
                    Suivant &raquo;
                </a>
            ";
        } else {
            // line 80
            yield "                <span class=\"px-4 py-2 bg-gray-200 border border-gray-300 rounded text-gray-500\">Suivant &raquo;</span>
            ";
        }
        // line 82
        yield "        </nav>
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
        return "service/list.html.twig";
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
        return array (  240 => 82,  236 => 80,  227 => 75,  225 => 74,  221 => 72,  215 => 71,  209 => 68,  203 => 66,  197 => 64,  194 => 63,  190 => 62,  186 => 60,  182 => 58,  173 => 53,  171 => 52,  163 => 46,  152 => 40,  143 => 34,  138 => 33,  136 => 32,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  111 => 22,  108 => 21,  104 => 20,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Services{% endblock %}

{% block body %}
<div class=\"container mx-auto py-8\">
    <!-- En-tête -->
    <div class=\"flex justify-between items-center mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Nos Services</h1>
        <a href=\"{{ path('service_new') }}\" class=\"flex items-center text-white bg-indigo-600 px-4 py-2 rounded hover:bg-indigo-700 transition duration-300\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
            </svg>
            Créer un service
        </a>
    </div>

    <!-- Liste des services -->
    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
        {% for service in services.data %}
            <div class=\"relative bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl hover:scale-105 transition duration-300 group\">
                <img src=\"https://via.placeholder.com/400x200\" alt=\"{{ service.title }}\" class=\"w-full h-48 object-cover\">
                <div class=\"p-4\">
                    <h2 class=\"text-lg font-bold text-indigo-600\">{{ service.title }}</h2>
                    <p class=\"mt-2 text-gray-600\">{{ service.description|slice(0, 100) ~ '...' }}</p>
                    <p class=\"mt-2 text-indigo-600 font-semibold\">{{ service.price }} €</p>
                    <a href=\"{{ path('service_detail', { id: service.id }) }}\" class=\"mt-4 inline-block bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition duration-300\">
                        Voir le service
                    </a>

                    <!-- Bouton Supprimer visible uniquement pour les administrateurs ou le propriétaire -->
                    {% if app.user and (is_granted('ROLE_ADMIN') or service.userService == app.user) %}
                        <form method=\"post\" action=\"{{ path('service_delete', {'id': service.id}) }}\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce service ?');\" class=\"mt-4\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ service.id) }}\">
                            <button class=\"bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300\">
                                Supprimer
                            </button>
                        </form>
                    {% endif %}
                </div>

                <!-- Effet de décoration au survol -->
                <div class=\"absolute inset-0 bg-indigo-100 opacity-0 group-hover:opacity-20 transition duration-300 pointer-events-none\"></div>
            </div>
        {% endfor %}
    </div>

    <!-- Pagination -->
    <div class=\"mt-8 flex justify-center\">
        <nav class=\"inline-flex space-x-2\">
            <!-- Page précédente -->
            {% if services.previousPage %}
                <a href=\"{{ path('service_list', { page: services.previousPage }) }}\"
                   class=\"px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100\">
                    &laquo; Précédent
                </a>
            {% else %}
                <span class=\"px-4 py-2 bg-gray-200 border border-gray-300 rounded text-gray-500\">&laquo; Précédent</span>
            {% endif %}

            <!-- Pages numérotées -->
            {% for page in 1..services.totalPages %}
                {% if page == services.currentPage %}
                    <span class=\"px-4 py-2 bg-indigo-500 text-white rounded\">{{ page }}</span>
                {% else %}
                    <a href=\"{{ path('service_list', { page: page }) }}\"
                       class=\"px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100\">
                        {{ page }}
                    </a>
                {% endif %}
            {% endfor %}

            <!-- Page suivante -->
            {% if services.nextPage %}
                <a href=\"{{ path('service_list', { page: services.nextPage }) }}\"
                   class=\"px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100\">
                    Suivant &raquo;
                </a>
            {% else %}
                <span class=\"px-4 py-2 bg-gray-200 border border-gray-300 rounded text-gray-500\">Suivant &raquo;</span>
            {% endif %}
        </nav>
    </div>
</div>
{% endblock %}
", "service/list.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/service/list.html.twig");
    }
}
