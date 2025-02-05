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

/* job/detail.html.twig */
class __TwigTemplate_4f84b1c00c6b161d6b96f59f7c7a6d56 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job/detail.html.twig", 1);
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

        yield "Détails de l'annonce : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
    <h1 class=\"text-3xl font-bold mb-4\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
    <p class=\"text-gray-700\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), "html", null, true);
        yield "</p>
    <p class=\"text-indigo-600 font-bold mt-4\">Budget : ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 9, $this->source); })()), "budget", [], "any", false, false, false, 9), "html", null, true);
        yield " €</p>

    <!-- Afficher le bouton \"Supprimer\" uniquement pour l'admin ou l'auteur -->
    ";
        // line 12
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 12, $this->source); })()), "userJob", [], "any", false, false, false, 12) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)))) {
            // line 13
            yield "        <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette annonce ?');\">
            <button class=\"bg-red-500 text-white px-4 py-2 rounded mt-4 hover:bg-red-600\">
                Supprimer
            </button>
        </form>
    ";
        }
        // line 19
        yield "
    <!-- Section pour postuler -->
    <div class=\"mt-8 bg-white shadow-md rounded-lg p-6\">
        ";
        // line 22
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            yield "            <p class=\"text-red-500\">Vous devez être connecté pour postuler à cette annonce.</p>
            <a href=\"";
            // line 24
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"text-blue-500 underline\">Se connecter</a>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 25, $this->source); })()), "userJob", [], "any", false, false, false, 25) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25))) {
            // line 26
            yield "            <p class=\"text-red-500\">Vous ne pouvez pas postuler à votre propre annonce.</p>
        ";
        } elseif (        // line 27
(isset($context["applicationForm"]) || array_key_exists("applicationForm", $context) ? $context["applicationForm"] : (function () { throw new RuntimeError('Variable "applicationForm" does not exist.', 27, $this->source); })())) {
            // line 28
            yield "            <h2 class=\"text-2xl font-bold mb-4\">Postuler à cette annonce</h2>
            ";
            // line 29
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["applicationForm"]) || array_key_exists("applicationForm", $context) ? $context["applicationForm"] : (function () { throw new RuntimeError('Variable "applicationForm" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-4"]]);
            yield "
                <div>
                    ";
            // line 31
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["applicationForm"]) || array_key_exists("applicationForm", $context) ? $context["applicationForm"] : (function () { throw new RuntimeError('Variable "applicationForm" does not exist.', 31, $this->source); })()), "message", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"]]);
            yield "
                    ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["applicationForm"]) || array_key_exists("applicationForm", $context) ? $context["applicationForm"] : (function () { throw new RuntimeError('Variable "applicationForm" does not exist.', 32, $this->source); })()), "message", [], "any", false, false, false, 32), 'widget');
            yield "
                    ";
            // line 33
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["applicationForm"]) || array_key_exists("applicationForm", $context) ? $context["applicationForm"] : (function () { throw new RuntimeError('Variable "applicationForm" does not exist.', 33, $this->source); })()), "message", [], "any", false, false, false, 33), 'errors');
            yield "
                </div>
                <button type=\"submit\" class=\"bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition\">
                    Postuler
                </button>
            ";
            // line 38
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["applicationForm"]) || array_key_exists("applicationForm", $context) ? $context["applicationForm"] : (function () { throw new RuntimeError('Variable "applicationForm" does not exist.', 38, $this->source); })()), 'form_end');
            yield "
        ";
        }
        // line 40
        yield "    </div>



    <!-- Liste des candidatures -->
    ";
        // line 45
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 45, $this->source); })()), "applications", [], "any", false, false, false, 45)) > 0)) {
            // line 46
            yield "        <div class=\"mt-8 bg-white shadow-md rounded-lg p-6\">
            <h2 class=\"text-2xl font-bold mb-4\">Candidatures reçues</h2>
            <ul class=\"space-y-4\">
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 49, $this->source); })()), "applications", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 50
                yield "                    <li class=\"border border-gray-300 rounded-lg p-4\">
                        <p><strong>Candidat :</strong> ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["application"], "applicant", [], "any", false, false, false, 51), "username", [], "any", false, false, false, 51), "html", null, true);
                yield "</p>
                        <p><strong>Message :</strong> ";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["application"], "message", [], "any", false, false, false, 52), "html", null, true);
                yield "</p>
                        <p class=\"text-gray-500 text-sm\"><strong>Postulé le :</strong> ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["application"], "appliedAt", [], "any", false, false, false, 53), "d/m/Y H:i"), "html", null, true);
                yield "</p>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['application'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "            </ul>
        </div>
    ";
        } else {
            // line 59
            yield "        <p class=\"text-gray-600 mt-8\">Aucune candidature reçue pour cette annonce.</p>
    ";
        }
        // line 61
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
        return "job/detail.html.twig";
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
        return array (  212 => 61,  208 => 59,  203 => 56,  194 => 53,  190 => 52,  186 => 51,  183 => 50,  179 => 49,  174 => 46,  172 => 45,  165 => 40,  160 => 38,  152 => 33,  148 => 32,  144 => 31,  139 => 29,  136 => 28,  134 => 27,  131 => 26,  129 => 25,  125 => 24,  122 => 23,  120 => 22,  115 => 19,  105 => 13,  103 => 12,  97 => 9,  93 => 8,  89 => 7,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'annonce : {{ job.title }}{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-6\">
    <h1 class=\"text-3xl font-bold mb-4\">{{ job.title }}</h1>
    <p class=\"text-gray-700\">{{ job.description }}</p>
    <p class=\"text-indigo-600 font-bold mt-4\">Budget : {{ job.budget }} €</p>

    <!-- Afficher le bouton \"Supprimer\" uniquement pour l'admin ou l'auteur -->
    {% if is_granted('ROLE_ADMIN') or job.userJob == app.user %}
        <form method=\"post\" action=\"{{ path('job_delete', { id: job.id }) }}\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette annonce ?');\">
            <button class=\"bg-red-500 text-white px-4 py-2 rounded mt-4 hover:bg-red-600\">
                Supprimer
            </button>
        </form>
    {% endif %}

    <!-- Section pour postuler -->
    <div class=\"mt-8 bg-white shadow-md rounded-lg p-6\">
        {% if not app.user %}
            <p class=\"text-red-500\">Vous devez être connecté pour postuler à cette annonce.</p>
            <a href=\"{{ path('app_login') }}\" class=\"text-blue-500 underline\">Se connecter</a>
        {% elseif job.userJob == app.user %}
            <p class=\"text-red-500\">Vous ne pouvez pas postuler à votre propre annonce.</p>
        {% elseif applicationForm %}
            <h2 class=\"text-2xl font-bold mb-4\">Postuler à cette annonce</h2>
            {{ form_start(applicationForm, {'attr': {'class': 'space-y-4'}}) }}
                <div>
                    {{ form_label(applicationForm.message, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    {{ form_widget(applicationForm.message) }}
                    {{ form_errors(applicationForm.message) }}
                </div>
                <button type=\"submit\" class=\"bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition\">
                    Postuler
                </button>
            {{ form_end(applicationForm) }}
        {% endif %}
    </div>



    <!-- Liste des candidatures -->
    {% if job.applications|length > 0 %}
        <div class=\"mt-8 bg-white shadow-md rounded-lg p-6\">
            <h2 class=\"text-2xl font-bold mb-4\">Candidatures reçues</h2>
            <ul class=\"space-y-4\">
                {% for application in job.applications %}
                    <li class=\"border border-gray-300 rounded-lg p-4\">
                        <p><strong>Candidat :</strong> {{ application.applicant.username }}</p>
                        <p><strong>Message :</strong> {{ application.message }}</p>
                        <p class=\"text-gray-500 text-sm\"><strong>Postulé le :</strong> {{ application.appliedAt|date('d/m/Y H:i') }}</p>
                    </li>
                {% endfor %}
            </ul>
        </div>
    {% else %}
        <p class=\"text-gray-600 mt-8\">Aucune candidature reçue pour cette annonce.</p>
    {% endif %}
</div>
{% endblock %}
", "job/detail.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/job/detail.html.twig");
    }
}
