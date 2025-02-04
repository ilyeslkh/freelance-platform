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

/* base.html.twig */
class __TwigTemplate_1b88cffe4dd551441b9f94f22cdadc80 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fadeIn {
            animation: fadeIn 0.5s ease-in-out;
        }
    </style>
</head>
<body class=\"bg-gray-100 text-gray-800\">
    <!-- Header -->
    <header class=\"bg-white shadow transition-all duration-300 hover:shadow-md\">
        <div class=\"container mx-auto px-4 py-4 flex justify-between items-center\">
            <h1 class=\"text-xl font-bold\">
                <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"hover:text-indigo-600 transition duration-300\">Freelance Platform</a>
            </h1>
            <nav class=\"flex space-x-4 items-center\">
                <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_list");
        yield "\" class=\"px-4 py-2 hover:bg-indigo-100 hover:scale-105 transition-all duration-300 rounded\">Services</a>
                <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_list");
        yield "\" class=\"px-4 py-2 hover:bg-indigo-100 hover:scale-105 transition-all duration-300 rounded\">Annonces</a>

                ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            yield "                    <!-- Icône vers le Dashboard -->
                    <a href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            yield "\" class=\"text-gray-600 hover:text-indigo-600 transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 10h11M9 21H4a1 1 0 01-1-1V4a1 1 0 011-1h5m6 0h5a1 1 0 011 1v16a1 1 0 01-1 1h-5M15 7h0m4 0h0\" />
                        </svg>
                    </a>
                    <span class=\"text-gray-700\">Connecté en tant que ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51), "html", null, true);
            yield "</span>
                    <a href=\"";
            // line 52
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"px-4 py-2 hover:bg-red-100 hover:scale-105 transition-all duration-300 rounded\">Déconnexion</a>
                ";
        } else {
            // line 54
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"px-4 py-2 hover:bg-green-100 hover:scale-105 transition-all duration-300 rounded\">Connexion</a>
                ";
        }
        // line 56
        yield "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 57
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\" class=\"text-indigo-500 hover:underline\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 inline\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 3h18v18H3V3z\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                    Espace Admin
                </a>
            ";
        }
        // line 64
        yield "
            </nav>
        </div>
    </header>


    <!-- Catégories -->
    <div class=\"bg-white shadow-sm\">
        <div class=\"container mx-auto px-4 py-2 flex space-x-4 overflow-x-auto\">
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 74
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_services", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\"
                   class=\"px-4 py-2 bg-gray-100 rounded hover:bg-indigo-100 hover:scale-105 transition-all duration-300 text-gray-800\">
                    ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 76), "html", null, true);
            yield "
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "        </div>
    </div>

    <!-- Flash Messages -->
    <div class=\"container mx-auto px-4 py-4\">
        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "flashes", [], "any", false, false, false, 84));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 85
            yield "            <div class=\"flash-message flash-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield " animate-fadeIn\">
                ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 87
                yield "                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "    </div>

    <!-- Main Content -->
    <main class=\"container mx-auto px-4 py-6\">
        ";
        // line 95
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 96
        yield "    </main>

    <!-- Footer -->
    <footer class=\"bg-gray-800 text-white py-4\">
        <div class=\"container mx-auto text-center\">
            &copy; ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Freelance Platform. Tous droits réservés.
        </div>
    </footer>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Freelance Platform";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  261 => 95,  244 => 6,  230 => 101,  223 => 96,  221 => 95,  215 => 91,  208 => 89,  199 => 87,  195 => 86,  190 => 85,  186 => 84,  179 => 79,  170 => 76,  164 => 74,  160 => 73,  149 => 64,  138 => 57,  135 => 56,  129 => 54,  124 => 52,  120 => 51,  112 => 46,  109 => 45,  107 => 44,  102 => 42,  98 => 41,  92 => 38,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Freelance Platform{% endblock %}</title>
    <link href=\"{{ asset('build/app.css') }}\" rel=\"stylesheet\">
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fadeIn {
            animation: fadeIn 0.5s ease-in-out;
        }
    </style>
</head>
<body class=\"bg-gray-100 text-gray-800\">
    <!-- Header -->
    <header class=\"bg-white shadow transition-all duration-300 hover:shadow-md\">
        <div class=\"container mx-auto px-4 py-4 flex justify-between items-center\">
            <h1 class=\"text-xl font-bold\">
                <a href=\"{{ path('home') }}\" class=\"hover:text-indigo-600 transition duration-300\">Freelance Platform</a>
            </h1>
            <nav class=\"flex space-x-4 items-center\">
                <a href=\"{{ path('service_list') }}\" class=\"px-4 py-2 hover:bg-indigo-100 hover:scale-105 transition-all duration-300 rounded\">Services</a>
                <a href=\"{{ path('job_list') }}\" class=\"px-4 py-2 hover:bg-indigo-100 hover:scale-105 transition-all duration-300 rounded\">Annonces</a>

                {% if app.user %}
                    <!-- Icône vers le Dashboard -->
                    <a href=\"{{ path('dashboard') }}\" class=\"text-gray-600 hover:text-indigo-600 transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 10h11M9 21H4a1 1 0 01-1-1V4a1 1 0 011-1h5m6 0h5a1 1 0 011 1v16a1 1 0 01-1 1h-5M15 7h0m4 0h0\" />
                        </svg>
                    </a>
                    <span class=\"text-gray-700\">Connecté en tant que {{ app.user.email }}</span>
                    <a href=\"{{ path('app_logout') }}\" class=\"px-4 py-2 hover:bg-red-100 hover:scale-105 transition-all duration-300 rounded\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"px-4 py-2 hover:bg-green-100 hover:scale-105 transition-all duration-300 rounded\">Connexion</a>
                {% endif %}
                {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('admin_dashboard') }}\" class=\"text-indigo-500 hover:underline\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 inline\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 3h18v18H3V3z\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                    Espace Admin
                </a>
            {% endif %}

            </nav>
        </div>
    </header>


    <!-- Catégories -->
    <div class=\"bg-white shadow-sm\">
        <div class=\"container mx-auto px-4 py-2 flex space-x-4 overflow-x-auto\">
            {% for category in categories %}
                <a href=\"{{ path('category_services', { id: category.id }) }}\"
                   class=\"px-4 py-2 bg-gray-100 rounded hover:bg-indigo-100 hover:scale-105 transition-all duration-300 text-gray-800\">
                    {{ category.name }}
                </a>
            {% endfor %}
        </div>
    </div>

    <!-- Flash Messages -->
    <div class=\"container mx-auto px-4 py-4\">
        {% for label, messages in app.flashes %}
            <div class=\"flash-message flash-{{ label }} animate-fadeIn\">
                {% for message in messages %}
                    <p>{{ message }}</p>
                {% endfor %}
            </div>
        {% endfor %}
    </div>

    <!-- Main Content -->
    <main class=\"container mx-auto px-4 py-6\">
        {% block body %}{% endblock %}
    </main>

    <!-- Footer -->
    <footer class=\"bg-gray-800 text-white py-4\">
        <div class=\"container mx-auto text-center\">
            &copy; {{ \"now\"|date(\"Y\") }} Freelance Platform. Tous droits réservés.
        </div>
    </footer>
</body>
</html>
", "base.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/base.html.twig");
    }
}
