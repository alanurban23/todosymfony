<?php

/* ToDoBundle:Home:get.html.twig */
class __TwigTemplate_146ec3b8774a16a57ffdebacf7affd158cebf6316ae84906698b6dcfb42dcb05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>ToDoApp</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\"
          integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
</head>
<body>
<div class=\"col-lg-8 col-lg-offset-2\" id=\"app\">
    <div class=\"page-header\">
        <h1>ToDoApp</h1>
    </div>

    <div class=\"col-lg-6\">

        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "form")));
        echo "
        <div class=\"form-group\" id=\"test\">
            <div class=\"col-sm-10\">
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tytuł", "id" => "name", "v-model" => "name")));
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-10\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Osoba", "id" => "user", "v-model" => "user")));
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-10\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "category", "v-model" => "category")));
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-10\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("label" => "Utwórz", "attr" => array("class" => "btn btn-primary", "id" => "category", "v-on:click" => "onSubmitForm")));
        echo "
            </div>
        </div>
        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>
    <div class=\"col-lg-6\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">Lista dostepnych zadań</div>
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Lp</th>
                    <th>Tytuł</th>
                    <th>Osoba</th>
                    <th>Kategoria</th>
                </tr>
                </thead>
                <tbody>

                <tr v-for=\"task in tasks\">
                    <td>[[ task.id ]]</td>
                    <td>[[ task.name ]]</td>
                    <td>[[ task.user ]]</td>
                    <td>[[ task.category ]]</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/vue.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/vue-resource.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/app.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ToDoBundle:Home:get.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 75,  127 => 74,  123 => 73,  119 => 72,  86 => 42,  80 => 39,  71 => 33,  67 => 32,  59 => 27,  55 => 26,  47 => 21,  43 => 20,  37 => 17,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>ToDoApp</title>*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"*/
/*           integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* </head>*/
/* <body>*/
/* <div class="col-lg-8 col-lg-offset-2" id="app">*/
/*     <div class="page-header">*/
/*         <h1>ToDoApp</h1>*/
/*     </div>*/
/* */
/*     <div class="col-lg-6">*/
/* */
/*         {{ form_start(form, {'attr': {'class': 'form-horizontal', 'id': 'form'}}) }}*/
/*         <div class="form-group" id="test">*/
/*             <div class="col-sm-10">*/
/*                 {{ form_widget(form.name, {'attr':{'class':'form-control', 'placeholder':'Tytuł', 'id':'name', 'v-model': 'name'}}) }}*/
/*                 {{ form_errors(form.name) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-sm-10">*/
/*                 {{ form_widget(form.user, {'attr':{'class':'form-control', 'placeholder':'Osoba', 'id':'user', 'v-model': 'user'}}) }}*/
/*                 {{ form_errors(form.user) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-sm-10">*/
/*                 {{ form_widget(form.category, {'attr':{'class':'form-control','id':'category', 'v-model': 'category'}}) }}*/
/*                 {{ form_errors(form.category) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-10">*/
/*                 {{ form_widget(form.save, {'label': 'Utwórz', 'attr':{'class':'btn btn-primary','id':'category', 'v-on:click': 'onSubmitForm'}}) }}*/
/*             </div>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/* */
/*     </div>*/
/*     <div class="col-lg-6">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">Lista dostepnych zadań</div>*/
/*             <table class="table">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Lp</th>*/
/*                     <th>Tytuł</th>*/
/*                     <th>Osoba</th>*/
/*                     <th>Kategoria</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*                 <tr v-for="task in tasks">*/
/*                     <td>[[ task.id ]]</td>*/
/*                     <td>[[ task.name ]]</td>*/
/*                     <td>[[ task.user ]]</td>*/
/*                     <td>[[ task.category ]]</td>*/
/*                 </tr>*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script src="{{ asset('bundles/framework/js/jquery-3.1.0.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/framework/js/vue.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/framework/js/vue-resource.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/framework/js/app.js') }}"></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
