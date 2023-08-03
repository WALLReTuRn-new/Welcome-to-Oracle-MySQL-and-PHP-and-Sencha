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

/* app/view/operation/insert.twig */
class __TwigTemplate_395b2d01c077f1bceca8f0504a016110 extends \Twig\Template
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
\t<div id=\"createTable\" class=\"content\"></div>
\t
</div>
";
        // line 6
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\">

Ext.create('Ext.form.Panel', {
    title: 'User Form',
    id: 'MyFormPanel',
    renderTo: createTable,
    width: 1200,
    height: 500,
    bodyPadding: 10,
    defaultType: 'textfield',

    items: [
        {
            fieldLabel: 'First Name',
            name: 'firstName'
        },
        {
            fieldLabel: 'Email',
            name: 'email'
        },
        {
            fieldLabel: 'Phone',
            name: 'phone'
        },
    ],

    buttons: [
        {
            text: 'Submit',
            handler: function () {
                var form = this.up('form'); // get the form panel
                if (form.isValid()) { // make sure the form contains valid data before submitting
                Ext.Ajax.request({
                    url: 'http://localhost/example/index.php?route=operation/insert|addUser',
                    method: 'POST',
                    params: form.getValues(),
                    data: form.getValues(),
                    datatype: 'json',
                    success: function (response, opts) {
                        
                        var obj = Ext.decode(response.responseText); // THIS IS A REAL HTML FORM
                        

                       if(obj.success){
                        Ext.Msg.alert('Form submitted successfully!');
                       }else{
                        Ext.Msg.alert('Have Error!');
                       }
                        

                    },
                    failure: function (response, opts) {
                        console.log('server-side failure with status code ' + response.status);
                    }
                });
                } else { // display error alert if the data is invalid
                    Ext.Msg.alert('Invalid Data', 'Please correct form errors.')
                }
            }
        }
    ]
});

\$(document).on('click','#button-1010',function(){
window.location.replace('http://localhost/example/index.php?route=common/home');
});

</script>
";
    }

    public function getTemplateName()
    {
        return "app/view/operation/insert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app/view/operation/insert.twig", "C:\\xampp\\htdocs\\example\\app\\view\\operation\\insert.twig");
    }
}
