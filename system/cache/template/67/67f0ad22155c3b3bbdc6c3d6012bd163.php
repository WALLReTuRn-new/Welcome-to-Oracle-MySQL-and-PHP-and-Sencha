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

/* app/view/operation/droptable.twig */
class __TwigTemplate_bfce05ae9f692067c0028c7fee1594a8 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
<div id=\"myContainer\"></div>
</div>
";
        // line 5
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\">

Ext.define('User', {
    extend: 'Ext.data.Model',
    fields: ['table', 'tableHref']
});
var userStore = Ext.create('Ext.data.Store', {
    model: 'User',
    autoLoad: true,
    pageSize: 100,
    proxy: {
        type: 'ajax',
        url: 'http://localhost/example/index.php?route=operation/droptable|getTable',
        reader: {
            type: 'json',
            rootProperty: 'tables',
            //totalProperty: 'total'
        }
    }
});
Ext.create('Ext.grid.Panel', {
    renderTo: myContainer,
    store: userStore,
    width: 1200,
    height: 500,
    title: 'All Tables ',
    columns: [
        {
            text: 'Table Name',
            width: 250,
            sortable: true,
            hideable: true,
            dataIndex: 'table'
        },
        {
            text: 'Delete Table',
            width: 350,
            dataIndex: 'tableHref',
            hidden: false
        }
    ]
});

\$(document).on('click','.dropTable',function () {
    
    var url = \$(this).attr('data-drop');

    
    \$.ajax({
        url: url,
        method: 'POST',
        dataType: 'json',
        success: function (json) {

            console.log(json);

            if(json.success){
                location.reload();
            }
            //\$('body').append(html);

          //  \$.each(json.table, function (i, item) {
              //  console.log(item); 
                //htmlUrl += ' <a href=\"' + item.tableHref + '\">' + item.table + '</a> |';
            //     htmlUrl += ' <a href=\"#\">' + item.table + '</a> |';
           // });
           // \$('#MyFormPanel_header-title-textEl').append(htmlUrl);

        }
    });
});


</script>
";
    }

    public function getTemplateName()
    {
        return "app/view/operation/droptable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app/view/operation/droptable.twig", "C:\\xampp\\htdocs\\example\\app\\view\\operation\\droptable.twig");
    }
}
