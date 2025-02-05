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
                        <th class=\"text-left py-2 px-4\">Statut</th>
                        <th class=\"text-left py-2 px-4\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 35
                yield "                        <tr class=\"border-b hover:bg-gray-50\">
                            <td class=\"py-2 px-4\">";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "service", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
                yield "</td>
                            <td class=\"py-2 px-4\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "reservedBy", [], "any", false, false, false, 37), "username", [], "any", false, false, false, 37), "html", null, true);
                yield "</td>
                            <td class=\"py-2 px-4\">";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "reservedAt", [], "any", false, false, false, 38), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                            <td class=\"py-2 px-4\">
                                ";
                // line 40
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 40) == "pending")) {
                    // line 41
                    yield "                                    <span class=\"text-yellow-500 font-bold\">En attente</span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 42
$context["reservation"], "status", [], "any", false, false, false, 42) == "accepted")) {
                    // line 43
                    yield "                                    <span class=\"text-green-500 font-bold\">Acceptée</span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 44
$context["reservation"], "status", [], "any", false, false, false, 44) == "rejected")) {
                    // line 45
                    yield "                                    <span class=\"text-red-500 font-bold\">Refusée</span>
                                ";
                }
                // line 47
                yield "                            </td>
                            <td class=\"py-2 px-4\">
                                ";
                // line 49
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 49) == "pending")) {
                    // line 50
                    yield "                                    <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                    yield "\" class=\"inline\">
                                        <button type=\"submit\" class=\"bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600\">
                                            Accepter
                                        </button>
                                    </form>
                                    <form method=\"post\" action=\"";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                    yield "\" class=\"inline\">
                                        <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600\">
                                            Refuser
                                        </button>
                                    </form>
                                ";
                } else {
                    // line 61
                    yield "                                    <span class=\"text-gray-500\">Aucune action</span>
                                ";
                }
                // line 63
                yield "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "                </tbody>
            </table>
        ";
        } else {
            // line 69
            yield "            <p class=\"text-gray-600\">Aucune réservation pour vos services.</p>
        ";
        }
        // line 71
        yield "    </div>

    <!-- Section Services Créés -->
    <div class=\"bg-white shadow-md rounded-lg p-6 mb-8\">
        <h2 class=\"text-xl font-bold mb-4\">Vos services créés</h2>
        ";
        // line 76
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["createdServices"]) || array_key_exists("createdServices", $context) ? $context["createdServices"] : (function () { throw new RuntimeError('Variable "createdServices" does not exist.', 76, $this->source); })())) > 0)) {
            // line 77
            yield "            <ul class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
                ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["createdServices"]) || array_key_exists("createdServices", $context) ? $context["createdServices"] : (function () { throw new RuntimeError('Variable "createdServices" does not exist.', 78, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 79
                yield "                    <li class=\"bg-gray-50 border border-gray-300 shadow-md rounded-lg p-4 hover:shadow-lg transition\">
                        <h3 class=\"text-lg font-bold\">";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 80), "html", null, true);
                yield "</h3>
                        <p class=\"text-gray-600 mt-2\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 81), 0, 100) . "..."), "html", null, true);
                yield "</p>
                        <p class=\"text-indigo-600 mt-2 font-semibold\">";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 82), "html", null, true);
                yield " €</p>
                        <a href=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                yield "\" class=\"mt-4 block text-blue-500 hover:underline\">
                            Voir le service
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "            </ul>
        ";
        } else {
            // line 90
            yield "            <p class=\"text-gray-600\">Vous n'avez créé aucun service pour le moment.</p>
        ";
        }
        // line 92
        yield "    </div>

    <!-- Section Réservations effectuées -->
    <div class=\"bg-white shadow-md rounded-lg p-6 mb-8\">
        <h2 class=\"text-xl font-bold mb-4\">Vos réservations</h2>
        ";
        // line 97
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["userReservations"]) || array_key_exists("userReservations", $context) ? $context["userReservations"] : (function () { throw new RuntimeError('Variable "userReservations" does not exist.', 97, $this->source); })())) > 0)) {
            // line 98
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
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["userReservations"]) || array_key_exists("userReservations", $context) ? $context["userReservations"] : (function () { throw new RuntimeError('Variable "userReservations" does not exist.', 107, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 108
                yield "                        <tr class=\"border-b hover:bg-gray-50\">
                            <td class=\"py-2 px-4\">";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "service", [], "any", false, false, false, 109), "title", [], "any", false, false, false, 109), "html", null, true);
                yield "</td>
                            <td class=\"py-2 px-4\">";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "service", [], "any", false, false, false, 110), "userService", [], "any", false, false, false, 110), "username", [], "any", false, false, false, 110), "html", null, true);
                yield "</td>
                            <td class=\"py-2 px-4\">";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "reservedAt", [], "any", false, false, false, 111), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            yield "                </tbody>
            </table>
        ";
        } else {
            // line 117
            yield "            <p class=\"text-gray-600\">Vous n'avez effectué aucune réservation.</p>
        ";
        }
        // line 119
        yield "    </div>

    <!-- Section Candidatures reçues pour vos annonces -->
<div class=\"bg-white shadow-md rounded-lg p-6 mb-8\">
    <h2 class=\"text-xl font-bold mb-4\">Candidatures pour vos annonces</h2>
    ";
        // line 124
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["receivedApplications"]) || array_key_exists("receivedApplications", $context) ? $context["receivedApplications"] : (function () { throw new RuntimeError('Variable "receivedApplications" does not exist.', 124, $this->source); })())) > 0)) {
            // line 125
            yield "        <table class=\"min-w-full bg-white border border-gray-300\">
            <thead>
                <tr class=\"bg-gray-100 border-b\">
                    <th class=\"text-left py-2 px-4\">Annonce</th>
                    <th class=\"text-left py-2 px-4\">Candidat</th>
                    <th class=\"text-left py-2 px-4\">Message</th>
                    <th class=\"text-left py-2 px-4\">Statut</th>
                    <th class=\"text-left py-2 px-4\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["receivedApplications"]) || array_key_exists("receivedApplications", $context) ? $context["receivedApplications"] : (function () { throw new RuntimeError('Variable "receivedApplications" does not exist.', 136, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 137
                yield "                    <tr class=\"border-b hover:bg-gray-50\">
                        <td class=\"py-2 px-4\">";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["application"], "job", [], "any", false, false, false, 138), "title", [], "any", false, false, false, 138), "html", null, true);
                yield "</td>
                        <td class=\"py-2 px-4\">";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["application"], "applicant", [], "any", false, false, false, 139), "username", [], "any", false, false, false, 139), "html", null, true);
                yield "</td>
                        <td class=\"py-2 px-4\">";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["application"], "message", [], "any", false, false, false, 140), "html", null, true);
                yield "</td>
                        <td class=\"py-2 px-4\">
                            ";
                // line 142
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["application"], "status", [], "any", false, false, false, 142) == "pending")) {
                    // line 143
                    yield "                                <span class=\"text-yellow-500 font-bold\">En attente</span>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 144
$context["application"], "status", [], "any", false, false, false, 144) == "accepted")) {
                    // line 145
                    yield "                                <span class=\"text-green-500 font-bold\">Acceptée</span>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 146
$context["application"], "status", [], "any", false, false, false, 146) == "rejected")) {
                    // line 147
                    yield "                                <span class=\"text-red-500 font-bold\">Refusée</span>
                            ";
                }
                // line 149
                yield "                        </td>
                        <td class=\"py-2 px-4\">
                            ";
                // line 151
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["application"], "status", [], "any", false, false, false, 151) == "pending")) {
                    // line 152
                    yield "                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_application_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["application"], "id", [], "any", false, false, false, 152)]), "html", null, true);
                    yield "\" class=\"inline\">
                                    <button type=\"submit\" class=\"bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600\">
                                        Accepter
                                    </button>
                                </form>
                                <form method=\"post\" action=\"";
                    // line 157
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_application_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["application"], "id", [], "any", false, false, false, 157)]), "html", null, true);
                    yield "\" class=\"inline\">
                                    <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600\">
                                        Refuser
                                    </button>
                                </form>
                            ";
                } else {
                    // line 163
                    yield "                                <span class=\"text-gray-500\">Aucune action</span>
                            ";
                }
                // line 165
                yield "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['application'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            yield "            </tbody>
        </table>
    ";
        } else {
            // line 171
            yield "        <p class=\"text-gray-600\">Aucune candidature reçue pour vos annonces.</p>
    ";
        }
        // line 173
        yield "</div>

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
        return array (  414 => 173,  410 => 171,  405 => 168,  397 => 165,  393 => 163,  384 => 157,  375 => 152,  373 => 151,  369 => 149,  365 => 147,  363 => 146,  360 => 145,  358 => 144,  355 => 143,  353 => 142,  348 => 140,  344 => 139,  340 => 138,  337 => 137,  333 => 136,  320 => 125,  318 => 124,  311 => 119,  307 => 117,  302 => 114,  293 => 111,  289 => 110,  285 => 109,  282 => 108,  278 => 107,  267 => 98,  265 => 97,  258 => 92,  254 => 90,  250 => 88,  239 => 83,  235 => 82,  231 => 81,  227 => 80,  224 => 79,  220 => 78,  217 => 77,  215 => 76,  208 => 71,  204 => 69,  199 => 66,  191 => 63,  187 => 61,  178 => 55,  169 => 50,  167 => 49,  163 => 47,  159 => 45,  157 => 44,  154 => 43,  152 => 42,  149 => 41,  147 => 40,  142 => 38,  138 => 37,  134 => 36,  131 => 35,  127 => 34,  114 => 23,  112 => 22,  102 => 15,  98 => 14,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
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
                        <th class=\"text-left py-2 px-4\">Statut</th>
                        <th class=\"text-left py-2 px-4\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for reservation in reservations %}
                        <tr class=\"border-b hover:bg-gray-50\">
                            <td class=\"py-2 px-4\">{{ reservation.service.title }}</td>
                            <td class=\"py-2 px-4\">{{ reservation.reservedBy.username }}</td>
                            <td class=\"py-2 px-4\">{{ reservation.reservedAt|date('d/m/Y H:i') }}</td>
                            <td class=\"py-2 px-4\">
                                {% if reservation.status == 'pending' %}
                                    <span class=\"text-yellow-500 font-bold\">En attente</span>
                                {% elseif reservation.status == 'accepted' %}
                                    <span class=\"text-green-500 font-bold\">Acceptée</span>
                                {% elseif reservation.status == 'rejected' %}
                                    <span class=\"text-red-500 font-bold\">Refusée</span>
                                {% endif %}
                            </td>
                            <td class=\"py-2 px-4\">
                                {% if reservation.status == 'pending' %}
                                    <form method=\"post\" action=\"{{ path('reservation_accept', { id: reservation.id }) }}\" class=\"inline\">
                                        <button type=\"submit\" class=\"bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600\">
                                            Accepter
                                        </button>
                                    </form>
                                    <form method=\"post\" action=\"{{ path('reservation_reject', { id: reservation.id }) }}\" class=\"inline\">
                                        <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600\">
                                            Refuser
                                        </button>
                                    </form>
                                {% else %}
                                    <span class=\"text-gray-500\">Aucune action</span>
                                {% endif %}
                            </td>
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
    <div class=\"bg-white shadow-md rounded-lg p-6 mb-8\">
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

    <!-- Section Candidatures reçues pour vos annonces -->
<div class=\"bg-white shadow-md rounded-lg p-6 mb-8\">
    <h2 class=\"text-xl font-bold mb-4\">Candidatures pour vos annonces</h2>
    {% if receivedApplications|length > 0 %}
        <table class=\"min-w-full bg-white border border-gray-300\">
            <thead>
                <tr class=\"bg-gray-100 border-b\">
                    <th class=\"text-left py-2 px-4\">Annonce</th>
                    <th class=\"text-left py-2 px-4\">Candidat</th>
                    <th class=\"text-left py-2 px-4\">Message</th>
                    <th class=\"text-left py-2 px-4\">Statut</th>
                    <th class=\"text-left py-2 px-4\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for application in receivedApplications %}
                    <tr class=\"border-b hover:bg-gray-50\">
                        <td class=\"py-2 px-4\">{{ application.job.title }}</td>
                        <td class=\"py-2 px-4\">{{ application.applicant.username }}</td>
                        <td class=\"py-2 px-4\">{{ application.message }}</td>
                        <td class=\"py-2 px-4\">
                            {% if application.status == 'pending' %}
                                <span class=\"text-yellow-500 font-bold\">En attente</span>
                            {% elseif application.status == 'accepted' %}
                                <span class=\"text-green-500 font-bold\">Acceptée</span>
                            {% elseif application.status == 'rejected' %}
                                <span class=\"text-red-500 font-bold\">Refusée</span>
                            {% endif %}
                        </td>
                        <td class=\"py-2 px-4\">
                            {% if application.status == 'pending' %}
                                <form method=\"post\" action=\"{{ path('job_application_accept', { id: application.id }) }}\" class=\"inline\">
                                    <button type=\"submit\" class=\"bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600\">
                                        Accepter
                                    </button>
                                </form>
                                <form method=\"post\" action=\"{{ path('job_application_reject', { id: application.id }) }}\" class=\"inline\">
                                    <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600\">
                                        Refuser
                                    </button>
                                </form>
                            {% else %}
                                <span class=\"text-gray-500\">Aucune action</span>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p class=\"text-gray-600\">Aucune candidature reçue pour vos annonces.</p>
    {% endif %}
</div>

</div>
{% endblock %}
", "dashboard/index.html.twig", "/home/lekehal/Documents/freelance_projet/freelance-app/back/templates/dashboard/index.html.twig");
    }
}
