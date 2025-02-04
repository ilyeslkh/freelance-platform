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

/* dashboard/index.html.twig */
class __TwigTemplate_66130aa2de442927dfcd8d1740c4ff7b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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

        yield "Tableau de Bord";
        
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
    <h1 class=\"text-3xl font-bold mb-6\">Tableau de bord</h1>

    <!-- Section Profil Utilisateur -->
    <div class=\"bg-white shadow-md rounded-lg p-6 mb-8\">
        <h2 class=\"text-xl font-bold mb-4\">Profil Utilisateur</h2>
        <ul class=\"text-gray-700\">
            <li><strong>Nom d'utilisateur :</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "username", [], "any", false, false, false, 13), "html", null, true);
        yield "</li>
            <li><strong>Email :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
        yield "</li>
            <li><strong>Rôle(s) :</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "roles", [], "any", false, false, false, 15), ", "), "html", null, true);
        yield "</li>
        </ul>
    </div>

    <!-- Section Réservations des Services Créés -->
    <div class=\"bg-white shadow-md rounded-lg p-6 mb-8\">
        <h2 class=\"text-xl font-bold mb-4\">Réservations pour vos services</h2>
        ";
        // line 22
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 22, $this->source); })())) > 0)) {
            // line 23
            yield "            <table class=\"min-w-full bg-white border border-gray-300\">
                <thead>
                    <tr class=\"bg-gray-100 border-b\">
                        <th class=\"text-left py-2 px-4\">Service</th>
                        <th class=\"text-left py-2 px-4\">Réservé par</th>
                        <th class=\"text-left py-2 px-4\">Date de réservation</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 33
                yield "                        <tr class=\"border-b hover:bg-gray-50\">
                            <td class=\"py-2 px-4\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "service", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34), "html", null, true);
                yield "</td>
                            <td class=\"py-2 px-4\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "reservedBy", [], "any", false, false, false, 35), "username", [], "any", false, false, false, 35), "html", null, true);
                yield "</td>
                            <td class=\"py-2 px-4\">";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "reservedAt", [], "any", false, false, false, 36), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "                </tbody>
            </table>
        ";
        } else {
            // line 42
            yield "            <p class=\"text-gray-600\">Aucune réservation pour vos services.</p>
        ";
        }
        // line 44
        yield "    </div>

    <!-- Section Services Créés -->
    <div class=\"bg-white shadow-md rounded-lg p-6 mb-8\">
        <h2 class=\"text-xl font-bold mb-4\">Vos services créés</h2>
        ";
        // line 49
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["createdServices"]) || array_key_exists("createdServices", $context) ? $context["createdServices"] : (function () { throw new RuntimeError('Variable "createdServices" does not exist.', 49, $this->source); })())) > 0)) {
            // line 50
            yield "            <ul class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["createdServices"]) || array_key_exists("createdServices", $context) ? $context["createdServices"] : (function () { throw new RuntimeError('Variable "createdServices" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 52
                yield "                    <li class=\"bg-gray-50 border border-gray-300 shadow-md rounded-lg p-4 hover:shadow-lg transition\">
                        <h3 class=\"text-lg font-bold\">";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 53), "html", null, true);
                yield "</h3>
                        <p class=\"text-gray-600 mt-2\">";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 54), 0, 100) . "..."), "html", null, true);
                yield "</p>
                        <p class=\"text-indigo-600 mt-2 font-semibold\">";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 55), "html", null, true);
                yield " €</p>
                        <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" class=\"mt-4 block text-blue-500 hover:underline\">
                            Voir le service
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "            </ul>
        ";
        } else {
            // line 63
            yield "            <p class=\"text-gray-600\">Vous n'avez créé aucun service pour le moment.</p>
        ";
        }
        // line 65
        yield "    </div>

    <!-- Section Réservations effectuées -->
    <div class=\"bg-white shadow-md rounded-lg p-6\">
        <h2 class=\"text-xl font-bold mb-4\">Vos réservations</h2>
        ";
        // line 70
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["userReservations"]) || array_key_exists("userReservations", $context) ? $context["userReservations"] : (function () { throw new RuntimeError('Variable "userReservations" does not exist.', 70, $this->source); })())) > 0)) {
            // line 71
            yield "            <table class=\"min-w-full bg-white border border-gray-300\">
                <thead>
                    <tr class=\"bg-gray-100 border-b\">
                        <th class=\"text-left py-2 px-4\">Service</th>
                        <th class=\"text-left py-2 px-4\">Créé par</th>
                        <th class=\"text-left py-2 px-4\">Date de réservation</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["userReservations"]) || array_key_exists("userReservations", $context) ? $context["userReservations"] : (function () { throw new RuntimeError('Variable "userReservations" does not exist.', 80, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 81
                yield "                        <tr class=\"border-b hover:bg-gray-50\">
                            <td class=\"py-2 px-4\">";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "service", [], "any", false, false, false, 82), "title", [], "any", false, false, false, 82), "html", null, true);
                yield "</td>
                            <td class=\"py-2 px-4\">";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "service", [], "any", false, false, false, 83), "userService", [], "any", false, false, false, 83), "username", [], "any", false, false, false, 83), "html", null, true);
                yield "</td>
                            <td class=\"py-2 px-4\">";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "reservedAt", [], "any", false, false, false, 84), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "                </tbody>
            </table>
        ";
        } else {
            // line 90
            yield "            <p class=\"text-gray-600\">Vous n'avez effectué aucune réservation.</p>
        ";
        }
        // line 92
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
        return "dashboard/index.html.twig";
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
        return array (  261 => 92,  257 => 90,  252 => 87,  243 => 84,  239 => 83,  235 => 82,  232 => 81,  228 => 80,  217 => 71,  215 => 70,  208 => 65,  204 => 63,  200 => 61,  189 => 56,  185 => 55,  181 => 54,  177 => 53,  174 => 52,  170 => 51,  167 => 50,  165 => 49,  158 => 44,  154 => 42,  149 => 39,  140 => 36,  136 => 35,  132 => 34,  129 => 33,  125 => 32,  114 => 23,  112 => 22,  102 => 15,  98 => 14,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de Bord{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-6\">
    <h1 class=\"text-3xl font-bold mb-6\">Tableau de bord</h1>

    <!-- Section Profil Utilisateur -->
    <div class=\"bg-white shadow-md rounded-lg p-6 mb-8\">
        <h2 class=\"text-xl font-bold mb-4\">Profil Utilisateur</h2>
        <ul class=\"text-gray-700\">
            <li><strong>Nom d'utilisateur :</strong> {{ user.username }}</li>
            <li><strong>Email :</strong> {{ user.email }}</li>
            <li><strong>Rôle(s) :</strong> {{ user.roles|join(', ') }}</li>
        </ul>
    </div>

    <!-- Section Réservations des Services Créés -->
    <div class=\"bg-white shadow-md rounded-lg p-6 mb-8\">
        <h2 class=\"text-xl font-bold mb-4\">Réservations pour vos services</h2>
        {% if reservations|length > 0 %}
            <table class=\"min-w-full bg-white border border-gray-300\">
                <thead>
                    <tr class=\"bg-gray-100 border-b\">
                        <th class=\"text-left py-2 px-4\">Service</th>
                        <th class=\"text-left py-2 px-4\">Réservé par</th>
                        <th class=\"text-left py-2 px-4\">Date de réservation</th>
                    </tr>
                </thead>
                <tbody>
                    {% for reservation in reservations %}
                        <tr class=\"border-b hover:bg-gray-50\">
                            <td class=\"py-2 px-4\">{{ reservation.service.title }}</td>
                            <td class=\"py-2 px-4\">{{ reservation.reservedBy.username }}</td>
                            <td class=\"py-2 px-4\">{{ reservation.reservedAt|date('d/m/Y H:i') }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% else %}
            <p class=\"text-gray-600\">Aucune réservation pour vos services.</p>
        {% endif %}
    </div>

    <!-- Section Services Créés -->
    <div class=\"bg-white shadow-md rounded-lg p-6 mb-8\">
        <h2 class=\"text-xl font-bold mb-4\">Vos services créés</h2>
        {% if createdServices|length > 0 %}
            <ul class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
                {% for service in createdServices %}
                    <li class=\"bg-gray-50 border border-gray-300 shadow-md rounded-lg p-4 hover:shadow-lg transition\">
                        <h3 class=\"text-lg font-bold\">{{ service.title }}</h3>
                        <p class=\"text-gray-600 mt-2\">{{ service.description|slice(0, 100) ~ '...' }}</p>
                        <p class=\"text-indigo-600 mt-2 font-semibold\">{{ service.price }} €</p>
                        <a href=\"{{ path('service_detail', { id: service.id }) }}\" class=\"mt-4 block text-blue-500 hover:underline\">
                            Voir le service
                        </a>
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            <p class=\"text-gray-600\">Vous n'avez créé aucun service pour le moment.</p>
        {% endif %}
    </div>

    <!-- Section Réservations effectuées -->
    <div class=\"bg-white shadow-md rounded-lg p-6\">
        <h2 class=\"text-xl font-bold mb-4\">Vos réservations</h2>
        {% if userReservations|length > 0 %}
            <table class=\"min-w-full bg-white border border-gray-300\">
                <thead>
                    <tr class=\"bg-gray-100 border-b\">
                        <th class=\"text-left py-2 px-4\">Service</th>
                        <th class=\"text-left py-2 px-4\">Créé par</th>
                        <th class=\"text-left py-2 px-4\">Date de réservation</th>
                    </tr>
                </thead>
                <tbody>
                    {% for reservation in userReservations %}
                        <tr class=\"border-b hover:bg-gray-50\">
                            <td class=\"py-2 px-4\">{{ reservation.service.title }}</td>
                            <td class=\"py-2 px-4\">{{ reservation.service.userService.username }}</td>
                            <td class=\"py-2 px-4\">{{ reservation.reservedAt|date('d/m/Y H:i') }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% else %}
            <p class=\"text-gray-600\">Vous n'avez effectué aucune réservation.</p>
        {% endif %}
    </div>
</div>
{% endblock %}
", "dashboard/index.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/dashboard/index.html.twig");
    }
}
