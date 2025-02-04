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

/* home/index.html.twig */
class __TwigTemplate_acde0816dc3ab0b95b439dd4074c9622 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Freelance Platform - Trouvez le talent parfait";
        
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
        yield "
<!-- Section Hero -->
<div class=\"bg-gradient-to-r from-indigo-500 via-purple-500 to-indigo-600 text-white py-16\">
    <div class=\"container mx-auto text-center px-4\">
        <h1 class=\"text-5xl font-bold mb-4\">Trouvez le talent parfait pour votre projet</h1>
        <p class=\"text-lg mb-6\">Une plateforme pour connecter les freelances talentueux avec des entreprises ambitieuses.</p>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_list");
        yield "\" class=\"bg-white text-indigo-600 px-8 py-3 rounded-full text-lg font-semibold shadow-md hover:bg-indigo-100 transition duration-300\">
            Explorez nos services
        </a>
    </div>
</div>

<!-- Section Pourquoi choisir notre plateforme -->
<div class=\"bg-gray-50 py-16\">
    <div class=\"container mx-auto px-4\">
        <h2 class=\"text-3xl font-bold mb-12 text-center text-gray-800\">Pourquoi choisir notre plateforme ?</h2>
        <div class=\"grid md:grid-cols-3 gap-12\">
            <div class=\"bg-white shadow-lg rounded-lg p-6 text-center hover:shadow-xl transition duration-300 transform hover:scale-105\">
                <h3 class=\"text-xl font-bold text-indigo-600\">Des talents vérifiés</h3>
                <p class=\"text-gray-600 mt-4\">Tous nos freelances sont rigoureusement sélectionnés pour garantir une qualité exceptionnelle.</p>
            </div>
            <div class=\"bg-white shadow-lg rounded-lg p-6 text-center hover:shadow-xl transition duration-300 transform hover:scale-105\">
                <h3 class=\"text-xl font-bold text-indigo-600\">Une sécurité optimale</h3>
                <p class=\"text-gray-600 mt-4\">Vos paiements sont protégés et libérés uniquement lorsque le travail est validé.</p>
            </div>
            <div class=\"bg-white shadow-lg rounded-lg p-6 text-center hover:shadow-xl transition duration-300 transform hover:scale-105\">
                <h3 class=\"text-xl font-bold text-indigo-600\">Des projets sur mesure</h3>
                <p class=\"text-gray-600 mt-4\">Trouvez des experts capables de répondre précisément à vos besoins.</p>
            </div>
        </div>
    </div>
</div>

<!-- Section Services les plus populaires -->
<div class=\"bg-white py-16\">
    <div class=\"container mx-auto px-4\">
        <h2 class=\"text-3xl font-bold mb-12 text-center text-gray-800\">Services les plus populaires</h2>
        <div class=\"grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-8\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 44, $this->source); })()), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 45
            yield "                <div class=\"bg-gray-50 shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300\">
                    <img src=\"https://via.placeholder.com/400x200\" alt=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 46), "html", null, true);
            yield "\" class=\"w-full h-48 object-cover\">
                    <div class=\"p-6\">
                        <h3 class=\"text-lg font-bold text-indigo-600 mb-2\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 48), "html", null, true);
            yield "</h3>
                        <p class=\"text-gray-600 mb-4\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 49), 0, 100) . "..."), "html", null, true);
            yield "</p>
                        <p class=\"text-indigo-600 font-bold mb-4\">À partir de ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 50), "html", null, true);
            yield " €</p>
                        <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"inline-block text-white bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded text-sm font-medium transition duration-300\">
                            Voir le service
                        </a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "        </div>
    </div>
</div>


<!-- Footer CTA -->
<div class=\"bg-gradient-to-r from-indigo-500 via-purple-500 to-indigo-600 text-white py-16\">
    <div class=\"container mx-auto text-center px-4\">
        <h2 class=\"text-3xl font-bold mb-4\">Prêt à démarrer votre projet ?</h2>
        <p class=\"text-lg mb-6\">Inscrivez-vous dès aujourd'hui et trouvez le talent parfait pour transformer vos idées en réalité.</p>
        <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"bg-white text-indigo-600 px-6 py-3 rounded-full text-lg font-semibold shadow-md hover:bg-indigo-100 transition duration-300\">
            Rejoindre maintenant
        </a>
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
        return "home/index.html.twig";
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
        return array (  176 => 67,  164 => 57,  152 => 51,  148 => 50,  144 => 49,  140 => 48,  135 => 46,  132 => 45,  128 => 44,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Freelance Platform - Trouvez le talent parfait{% endblock %}

{% block body %}

<!-- Section Hero -->
<div class=\"bg-gradient-to-r from-indigo-500 via-purple-500 to-indigo-600 text-white py-16\">
    <div class=\"container mx-auto text-center px-4\">
        <h1 class=\"text-5xl font-bold mb-4\">Trouvez le talent parfait pour votre projet</h1>
        <p class=\"text-lg mb-6\">Une plateforme pour connecter les freelances talentueux avec des entreprises ambitieuses.</p>
        <a href=\"{{ path('service_list') }}\" class=\"bg-white text-indigo-600 px-8 py-3 rounded-full text-lg font-semibold shadow-md hover:bg-indigo-100 transition duration-300\">
            Explorez nos services
        </a>
    </div>
</div>

<!-- Section Pourquoi choisir notre plateforme -->
<div class=\"bg-gray-50 py-16\">
    <div class=\"container mx-auto px-4\">
        <h2 class=\"text-3xl font-bold mb-12 text-center text-gray-800\">Pourquoi choisir notre plateforme ?</h2>
        <div class=\"grid md:grid-cols-3 gap-12\">
            <div class=\"bg-white shadow-lg rounded-lg p-6 text-center hover:shadow-xl transition duration-300 transform hover:scale-105\">
                <h3 class=\"text-xl font-bold text-indigo-600\">Des talents vérifiés</h3>
                <p class=\"text-gray-600 mt-4\">Tous nos freelances sont rigoureusement sélectionnés pour garantir une qualité exceptionnelle.</p>
            </div>
            <div class=\"bg-white shadow-lg rounded-lg p-6 text-center hover:shadow-xl transition duration-300 transform hover:scale-105\">
                <h3 class=\"text-xl font-bold text-indigo-600\">Une sécurité optimale</h3>
                <p class=\"text-gray-600 mt-4\">Vos paiements sont protégés et libérés uniquement lorsque le travail est validé.</p>
            </div>
            <div class=\"bg-white shadow-lg rounded-lg p-6 text-center hover:shadow-xl transition duration-300 transform hover:scale-105\">
                <h3 class=\"text-xl font-bold text-indigo-600\">Des projets sur mesure</h3>
                <p class=\"text-gray-600 mt-4\">Trouvez des experts capables de répondre précisément à vos besoins.</p>
            </div>
        </div>
    </div>
</div>

<!-- Section Services les plus populaires -->
<div class=\"bg-white py-16\">
    <div class=\"container mx-auto px-4\">
        <h2 class=\"text-3xl font-bold mb-12 text-center text-gray-800\">Services les plus populaires</h2>
        <div class=\"grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-8\">
            {% for service in services|slice(0, 6) %}
                <div class=\"bg-gray-50 shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300\">
                    <img src=\"https://via.placeholder.com/400x200\" alt=\"{{ service.title }}\" class=\"w-full h-48 object-cover\">
                    <div class=\"p-6\">
                        <h3 class=\"text-lg font-bold text-indigo-600 mb-2\">{{ service.title }}</h3>
                        <p class=\"text-gray-600 mb-4\">{{ service.description|slice(0, 100) ~ '...' }}</p>
                        <p class=\"text-indigo-600 font-bold mb-4\">À partir de {{ service.price }} €</p>
                        <a href=\"{{ path('service_detail', { id: service.id }) }}\" class=\"inline-block text-white bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded text-sm font-medium transition duration-300\">
                            Voir le service
                        </a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>


<!-- Footer CTA -->
<div class=\"bg-gradient-to-r from-indigo-500 via-purple-500 to-indigo-600 text-white py-16\">
    <div class=\"container mx-auto text-center px-4\">
        <h2 class=\"text-3xl font-bold mb-4\">Prêt à démarrer votre projet ?</h2>
        <p class=\"text-lg mb-6\">Inscrivez-vous dès aujourd'hui et trouvez le talent parfait pour transformer vos idées en réalité.</p>
        <a href=\"{{ path('app_register') }}\" class=\"bg-white text-indigo-600 px-6 py-3 rounded-full text-lg font-semibold shadow-md hover:bg-indigo-100 transition duration-300\">
            Rejoindre maintenant
        </a>
    </div>
</div>

{% endblock %}
", "home/index.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/home/index.html.twig");
    }
}
