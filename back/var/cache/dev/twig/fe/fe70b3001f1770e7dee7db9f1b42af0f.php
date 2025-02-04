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

/* job/list.html.twig */
class __TwigTemplate_dfe26ae17bb05053b545c363ed0cd765 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job/list.html.twig", 1);
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

        yield "Liste des Annonces";
        
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
    <div class=\"flex justify-between items-center mb-6\">
        <h1 class=\"text-2xl font-bold\">Liste des Annonces</h1>
        <!-- Bouton \"Créer une annonce\" visible uniquement pour les administrateurs -->
        ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 11
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_create");
            yield "\" class=\"bg-blue-600 text-white px-6 py-2 rounded-full shadow hover:bg-blue-700 transition duration-300\">
                Créer une annonce
            </a>
        ";
        }
        // line 15
        yield "    </div>

    ";
        // line 17
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 17, $this->source); })())) > 0)) {
            // line 18
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 20
                yield "                <div class=\"bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300\">
                    <div class=\"p-6\">
                        <h2 class=\"text-xl font-bold text-indigo-600\">";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 22), "html", null, true);
                yield "</h2>
                        <p class=\"mt-2 text-gray-600\">";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 23), 0, 100) . "..."), "html", null, true);
                yield "</p>
                        <p class=\"mt-4 text-lg font-semibold text-blue-600\">Budget : ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "budget", [], "any", false, false, false, 24), "html", null, true);
                yield " €</p>
                        <a href=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                yield "\" 
                           class=\"mt-4 inline-block bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition duration-300\">
                            Voir l'annonce
                        </a>
                    </div>
                    
                    <!-- Bouton Supprimer -->
                    ";
                // line 32
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, $context["job"], "userJob", [], "any", false, false, false, 32) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)))) {
                    // line 33
                    yield "                        <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                    yield "\" 
                              onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette annonce ?');\" class=\"p-4 border-t\">
                            <button class=\"w-full bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition duration-300\">
                                Supprimer
                            </button>
                        </form>
                    ";
                }
                // line 40
                yield "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['job'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "        </div>
    ";
        } else {
            // line 44
            yield "        <p class=\"text-gray-600 mt-6\">Aucune annonce disponible pour le moment.</p>
    ";
        }
        // line 46
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
        return "job/list.html.twig";
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
        return array (  168 => 46,  164 => 44,  160 => 42,  153 => 40,  142 => 33,  140 => 32,  130 => 25,  126 => 24,  122 => 23,  118 => 22,  114 => 20,  110 => 19,  107 => 18,  105 => 17,  101 => 15,  93 => 11,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Annonces{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-6\">
    <div class=\"flex justify-between items-center mb-6\">
        <h1 class=\"text-2xl font-bold\">Liste des Annonces</h1>
        <!-- Bouton \"Créer une annonce\" visible uniquement pour les administrateurs -->
        {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('job_create') }}\" class=\"bg-blue-600 text-white px-6 py-2 rounded-full shadow hover:bg-blue-700 transition duration-300\">
                Créer une annonce
            </a>
        {% endif %}
    </div>

    {% if jobs|length > 0 %}
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
            {% for job in jobs %}
                <div class=\"bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300\">
                    <div class=\"p-6\">
                        <h2 class=\"text-xl font-bold text-indigo-600\">{{ job.title }}</h2>
                        <p class=\"mt-2 text-gray-600\">{{ job.description|slice(0, 100) ~ '...' }}</p>
                        <p class=\"mt-4 text-lg font-semibold text-blue-600\">Budget : {{ job.budget }} €</p>
                        <a href=\"{{ path('job_detail', { id: job.id }) }}\" 
                           class=\"mt-4 inline-block bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition duration-300\">
                            Voir l'annonce
                        </a>
                    </div>
                    
                    <!-- Bouton Supprimer -->
                    {% if is_granted('ROLE_ADMIN') or job.userJob == app.user %}
                        <form method=\"post\" action=\"{{ path('job_delete', { id: job.id }) }}\" 
                              onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette annonce ?');\" class=\"p-4 border-t\">
                            <button class=\"w-full bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition duration-300\">
                                Supprimer
                            </button>
                        </form>
                    {% endif %}
                </div>
            {% endfor %}
        </div>
    {% else %}
        <p class=\"text-gray-600 mt-6\">Aucune annonce disponible pour le moment.</p>
    {% endif %}
</div>
{% endblock %}
", "job/list.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/job/list.html.twig");
    }
}
