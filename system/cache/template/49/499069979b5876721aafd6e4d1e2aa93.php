<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* app/view/common/menu.twig */
class __TwigTemplate_d0e8a422608c02d3014c6c01ab2f4570 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav>
\t<ul class=\"snip1226\">
\t\t<li>
\t\t\t<a href=\"http://localhost/example/index.php?route=common/home\" data-hover=\"Data\">Data</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"http://localhost/example/index.php?route=operation/create\" data-hover=\"CreateTable\">CreateTable</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"http://localhost/example/index.php?route=operation/droptable\" data-hover=\"DropTable\">DropTable</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"http://localhost/example/index.php?route=operation/insert\" data-hover=\"Insert\">Insert</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\" data-hover=\"Delete\">Delete</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\" data-hover=\"Update\">Update</a>
\t\t</li>
\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "app/view/common/menu.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app/view/common/menu.twig", "C:\\xampp\\htdocs\\example\\app\\view\\common\\menu.twig");
    }
}
