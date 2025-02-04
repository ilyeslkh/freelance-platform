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

/* security/login.html.twig */
class __TwigTemplate_26b2395324a7ab6dea8338f9712f1eae extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Connexion";
        
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
        yield "<div class=\"flex items-center justify-center min-h-screen bg-gray-100\">
    <div class=\"bg-white shadow-lg rounded-lg p-6 w-full max-w-md\">
        <h2 class=\"text-2xl font-bold text-center text-gray-800 mb-6\">Connexion</h2>

        ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            yield "            <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
                <span class=\"block sm:inline\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageKey", [], "any", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            yield "</span>
            </div>
        ";
        }
        // line 15
        yield "
        <form method=\"post\" action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"space-y-4\">
            <div>
                <label for=\"username\" class=\"block text-sm font-medium text-gray-700\">Adresse e-mail</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\" 
                       class=\"mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm\" 
                       required />
            </div>

            <div>
                <label for=\"password\" class=\"block text-sm font-medium text-gray-700\">Mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"_password\" 
                       class=\"mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm\" 
                       required />
            </div>

            <button type=\"submit\" 
                    class=\"w-full bg-indigo-600 text-white font-medium py-2 px-4 rounded-md shadow hover:bg-indigo-700 transition\">
                Se connecter
            </button>
        </form>

        <div class=\"mt-6 text-center\">
            <p class=\"text-sm text-gray-600\">Pas encore de compte ? 
                <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-indigo-500 font-medium hover:underline\">Créer un compte</a>
            </p>
        </div>

        <div class=\"mt-6 text-center\">
            <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google_start");
        yield "\" 
               class=\"inline-flex items-center justify-center w-full bg-red-600 text-white font-medium py-2 px-4 rounded-md shadow hover:bg-red-700 transition\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                    <path d=\"M23.505 12.272c0-.92-.08-1.596-.256-2.297H12.24v4.164h6.36c-.128 1.028-.818 2.575-2.364 3.618l-.022.143 3.428 2.652.237.024c2.183-2.016 3.626-4.986 3.626-8.304zM12.24 23.896c3.297 0 6.072-1.084 8.095-2.944l-3.86-3.007c-1.048.732-2.437 1.252-4.235 1.252-3.256 0-6.028-2.182-7.012-5.126l-.145.012-3.795 2.962-.049.134c2.003 4.011 6.073 6.716 10.94 6.716zM5.228 14.68c-.244-.732-.384-1.512-.384-2.348 0-.836.14-1.616.384-2.348L1.419 6.982l-.124.057A11.984 11.984 0 000 12.332c0 1.959.472 3.806 1.296 5.353l3.932-2.993zm7.012-10.972c1.92-.037 3.612.662 4.92 1.94l3.645-3.558C18.302.93 15.56-.034 12.24 0 7.372 0 3.302 2.703 1.296 6.712l3.932 2.993c.984-2.944 3.756-5.126 7.012-5.126z\"/>
                </svg>
                Connexion via Google
            </a>
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
        return "security/login.html.twig";
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
        return array (  142 => 44,  134 => 39,  111 => 19,  105 => 16,  102 => 15,  96 => 12,  93 => 11,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
<div class=\"flex items-center justify-center min-h-screen bg-gray-100\">
    <div class=\"bg-white shadow-lg rounded-lg p-6 w-full max-w-md\">
        <h2 class=\"text-2xl font-bold text-center text-gray-800 mb-6\">Connexion</h2>

        {% if error %}
            <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
                <span class=\"block sm:inline\">{{ error.messageKey|trans(error.messageData, 'security') }}</span>
            </div>
        {% endif %}

        <form method=\"post\" action=\"{{ path('app_login') }}\" class=\"space-y-4\">
            <div>
                <label for=\"username\" class=\"block text-sm font-medium text-gray-700\">Adresse e-mail</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" 
                       class=\"mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm\" 
                       required />
            </div>

            <div>
                <label for=\"password\" class=\"block text-sm font-medium text-gray-700\">Mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"_password\" 
                       class=\"mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm\" 
                       required />
            </div>

            <button type=\"submit\" 
                    class=\"w-full bg-indigo-600 text-white font-medium py-2 px-4 rounded-md shadow hover:bg-indigo-700 transition\">
                Se connecter
            </button>
        </form>

        <div class=\"mt-6 text-center\">
            <p class=\"text-sm text-gray-600\">Pas encore de compte ? 
                <a href=\"{{ path('app_register') }}\" class=\"text-indigo-500 font-medium hover:underline\">Créer un compte</a>
            </p>
        </div>

        <div class=\"mt-6 text-center\">
            <a href=\"{{ path('connect_google_start') }}\" 
               class=\"inline-flex items-center justify-center w-full bg-red-600 text-white font-medium py-2 px-4 rounded-md shadow hover:bg-red-700 transition\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                    <path d=\"M23.505 12.272c0-.92-.08-1.596-.256-2.297H12.24v4.164h6.36c-.128 1.028-.818 2.575-2.364 3.618l-.022.143 3.428 2.652.237.024c2.183-2.016 3.626-4.986 3.626-8.304zM12.24 23.896c3.297 0 6.072-1.084 8.095-2.944l-3.86-3.007c-1.048.732-2.437 1.252-4.235 1.252-3.256 0-6.028-2.182-7.012-5.126l-.145.012-3.795 2.962-.049.134c2.003 4.011 6.073 6.716 10.94 6.716zM5.228 14.68c-.244-.732-.384-1.512-.384-2.348 0-.836.14-1.616.384-2.348L1.419 6.982l-.124.057A11.984 11.984 0 000 12.332c0 1.959.472 3.806 1.296 5.353l3.932-2.993zm7.012-10.972c1.92-.037 3.612.662 4.92 1.94l3.645-3.558C18.302.93 15.56-.034 12.24 0 7.372 0 3.302 2.703 1.296 6.712l3.932 2.993c.984-2.944 3.756-5.126 7.012-5.126z\"/>
                </svg>
                Connexion via Google
            </a>
        </div>
    </div>
</div>
{% endblock %}
", "security/login.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/security/login.html.twig");
    }
}
