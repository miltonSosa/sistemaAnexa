<?php

/* AnexaCooperadoraBundle:listado:index.html.twig */
class __TwigTemplate_59e73cead2a27f00d33362cb0a905efa9d1e02744467b997132624195a1b691f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:listado:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dataAdmin' => array($this, 'block_dataAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle:backend:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecab817ec7ab675041b88f125faf36bf13c8024caf07b44de386dda28e6d5bd9 = $this->env->getExtension("native_profiler");
        $__internal_ecab817ec7ab675041b88f125faf36bf13c8024caf07b44de386dda28e6d5bd9->enter($__internal_ecab817ec7ab675041b88f125faf36bf13c8024caf07b44de386dda28e6d5bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:listado:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecab817ec7ab675041b88f125faf36bf13c8024caf07b44de386dda28e6d5bd9->leave($__internal_ecab817ec7ab675041b88f125faf36bf13c8024caf07b44de386dda28e6d5bd9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0f956db3ef7513683e02058b41509496aca0cbd52a6c95fdc9f6e20dd9dc5a9 = $this->env->getExtension("native_profiler");
        $__internal_c0f956db3ef7513683e02058b41509496aca0cbd52a6c95fdc9f6e20dd9dc5a9->enter($__internal_c0f956db3ef7513683e02058b41509496aca0cbd52a6c95fdc9f6e20dd9dc5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Listados ";
        
        $__internal_c0f956db3ef7513683e02058b41509496aca0cbd52a6c95fdc9f6e20dd9dc5a9->leave($__internal_c0f956db3ef7513683e02058b41509496aca0cbd52a6c95fdc9f6e20dd9dc5a9_prof);

    }

    // line 4
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_e4b88f5148017e40610ab8a94bc571ca2903f10543153287f009b02fc55a4242 = $this->env->getExtension("native_profiler");
        $__internal_e4b88f5148017e40610ab8a94bc571ca2903f10543153287f009b02fc55a4242->enter($__internal_e4b88f5148017e40610ab8a94bc571ca2903f10543153287f009b02fc55a4242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 5
        echo "  <div class=\"panel panel-primary\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Listado de Matrículas Pagas</div>
    <!-- Table -->
    <div class=\"panel-body\" id=\"paginacion\">                                 
      <div class=\"col-md-6\"> Seleccione un año para ver los alumnos que pagaron la matrícula</div>
      <form id=\"idForm1\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("listado_matriculados");
        echo "\">
        <div class=\"col-md-6\"> 
          <div class=\"col-md-6\">
            <label for=\"anio\"> Año</label>
            <select class=\"form-control cunsulta1\" name=\"anio\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anios_matriculas"]) ? $context["anios_matriculas"] : $this->getContext($context, "anios_matriculas")));
        foreach ($context['_seq'] as $context["_key"] => $context["año"]) {
            // line 17
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['año'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </select>
          </div>
          <div class=\"col-md-6\">
            <label for=\"buscar\"> Buscar</label>
            <button class=\"btn btn-primary col-md-12\" title=\"Buscar\" id=\"consulta1\"><span class=\"glyphicon glyphicon-search\"></span></button>
            
          </div>
        </div>
      </form>
    </div>    
  </div> ";
        // line 30
        echo "

  <div class=\"panel panel-primary\">
    <div class=\"panel-heading\">Listado de cuotas becadas o pagas</div>
    <div class=\"panel-body\" id=\"paginacion\">            
      <div class=\"col-md-4\"> Seleccione año y mes para ver los alumnos con la cuota paga</div>
      <form id=\"idForm2\" action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("listado_pago_becado");
        echo "\" method=\"post\">
        <div class=\"col-md-8\"> 
                
          <div class=\"col-md-4\">
              <label for=\"anio\">Año</label>
              <select class=\"form-control cunsulta2\" name=\"anio\">
                  ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anios"]) ? $context["anios"] : $this->getContext($context, "anios")));
        foreach ($context['_seq'] as $context["_key"] => $context["año"]) {
            // line 43
            echo "                      <option value=\"";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['año'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "              </select>
          </div>
          <div class=\"col-md-4\">
              <label for=\"mes\">Mes</label>
              <select class=\"form-control cunsulta2\" name=\"mes\">
                  ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")));
        foreach ($context['_seq'] as $context["_key"] => $context["mes"]) {
            // line 51
            echo "                      <option value=\"";
            echo twig_escape_filter($this->env, $context["mes"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["mes"], "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "               
              </select>
          </div>
          ";
        // line 67
        echo "  
          <div class=\"col-md-4\">
            <label for=\"buscar\">Buscar</label>
            <button class=\"btn btn-primary col-md-12\" id=\"cunsulta2\"><span class=\"glyphicon glyphicon-search\"></span></button>                       
          </div>  
        </div>                          
      </form>
    </div>
  </div> ";
        // line 76
        echo "

  <div class=\"panel panel-primary\">
    <div class=\"panel-heading\">Listado de cuotas impagas</div>
    <div class=\"panel-body\" id=\"paginacion\">                                 
      <div class=\"col-md-6\"> Seleccione un año y mes para ver los alumnos que no pagaron la cuota</div>
      <form id=\"idForm2\" action=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("listado_cuotas_impagas");
        echo "\" method=\"post\">
        <div class=\"col-md-6\"> 
        
          <div class=\"col-md-4\">
            <label for=\"anio\">Año</label>
            <select class=\"form-control cunsulta2\" name=\"anio\">
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anios"]) ? $context["anios"] : $this->getContext($context, "anios")));
        foreach ($context['_seq'] as $context["_key"] => $context["año"]) {
            // line 89
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['año'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "            </select>
          </div>
          <div class=\"col-md-4\">
            <label for=\"mes\">Mes</label>
            <select class=\"form-control cunsulta2\" name=\"mes\">
                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")));
        foreach ($context['_seq'] as $context["_key"] => $context["mes"]) {
            // line 97
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $context["mes"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["mes"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "            </select>
          </div>
          <div class=\"col-md-4\">
            <label for=\"buscar\">Buscar</label>
            <button class=\"btn btn-primary col-md-12\" id=\"cunsulta2\"><span class=\"glyphicon glyphicon-search\"></span></button> 
          </div>
        </div>
      </form> 
    </div>     
  </div> ";
        // line 109
        echo "
  ";
        // line 110
        if ($this->env->getExtension('security')->isGranted("ROLE_GESTION")) {
            // line 111
            echo "      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">Listado de comisión </div>
        <div class=\"panel-body\" id=\"paginacion\">                                 
          <div class=\"col-md-6\"> Monto total de comisión de las cuotas cobradas </div>                
              <div class=\"col-md-4\">
                <label for=\"buscar\">Ver</label>
                <a class=\"btn btn-primary col-md-12\" id=\"buscar\" href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anexa_cooperadora_backend", array("anio" => "año", "mes" => "mes")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
              </div>           
        </div>
      </div>
    ";
        }
        // line 122
        echo "<script>
  \$('#consulta1').click(function(){
    \$.ajax({
      data: \$(\"#idForm1\").serialize()
    })
    .done(function( html ) {
      \$('html').parent().html(html);

    });
  });  
  \$('#consulta2').click(function(){
    \$.ajax({
      data: \$(\"#idForm2\").serialize()
    })
    .done(function( html ) {
      \$('html').parent().html(html);
    });
  });
</script>
";
        
        $__internal_e4b88f5148017e40610ab8a94bc571ca2903f10543153287f009b02fc55a4242->leave($__internal_e4b88f5148017e40610ab8a94bc571ca2903f10543153287f009b02fc55a4242_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:listado:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 122,  243 => 117,  235 => 111,  233 => 110,  230 => 109,  219 => 99,  208 => 97,  204 => 96,  197 => 91,  186 => 89,  182 => 88,  173 => 82,  165 => 76,  155 => 67,  150 => 52,  139 => 51,  135 => 50,  128 => 45,  117 => 43,  113 => 42,  104 => 36,  96 => 30,  84 => 19,  73 => 17,  69 => 16,  61 => 11,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* {% block title %} Administración | Listados {% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*   <div class="panel panel-primary">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Listado de Matrículas Pagas</div>*/
/*     <!-- Table -->*/
/*     <div class="panel-body" id="paginacion">                                 */
/*       <div class="col-md-6"> Seleccione un año para ver los alumnos que pagaron la matrícula</div>*/
/*       <form id="idForm1" method="post" action="{{ path('listado_matriculados')}}">*/
/*         <div class="col-md-6"> */
/*           <div class="col-md-6">*/
/*             <label for="anio"> Año</label>*/
/*             <select class="form-control cunsulta1" name="anio">*/
/*                 {% for año in anios_matriculas %}*/
/*                   <option value="{{año}}">{{año}}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="col-md-6">*/
/*             <label for="buscar"> Buscar</label>*/
/*             <button class="btn btn-primary col-md-12" title="Buscar" id="consulta1"><span class="glyphicon glyphicon-search"></span></button>*/
/*             */
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*     </div>    */
/*   </div> {# fin panel de matricula #}*/
/* */
/* */
/*   <div class="panel panel-primary">*/
/*     <div class="panel-heading">Listado de cuotas becadas o pagas</div>*/
/*     <div class="panel-body" id="paginacion">            */
/*       <div class="col-md-4"> Seleccione año y mes para ver los alumnos con la cuota paga</div>*/
/*       <form id="idForm2" action="{{ path('listado_pago_becado')}}" method="post">*/
/*         <div class="col-md-8"> */
/*                 */
/*           <div class="col-md-4">*/
/*               <label for="anio">Año</label>*/
/*               <select class="form-control cunsulta2" name="anio">*/
/*                   {% for año in anios %}*/
/*                       <option value="{{año}}">{{año}}</option>*/
/*                   {% endfor %}*/
/*               </select>*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*               <label for="mes">Mes</label>*/
/*               <select class="form-control cunsulta2" name="mes">*/
/*                   {% for mes in meses %}*/
/*                       <option value="{{mes}}">{{mes}}</option>*/
/*                   {% endfor %}               */
/*               </select>*/
/*           </div>*/
/*           {# {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*               <div class="col-md-4">*/
/*                   <label for="user">Usuarios de Gestión</label>*/
/*                   <select class="form-control cunsulta2" id="user" name="userId" required>*/
/*                       <option value="0">Todos</option>*/
/*                       {% for user in usuariosGestion %}    */
/*                           <option value="{{user.id}}">{{user.username}}</option>*/
/*                       {% endfor %}*/
/*                   </select>*/
/*               </div> */
/*               {% else %}*/
/*               {% endif %}*/
/*           #}  */
/*           <div class="col-md-4">*/
/*             <label for="buscar">Buscar</label>*/
/*             <button class="btn btn-primary col-md-12" id="cunsulta2"><span class="glyphicon glyphicon-search"></span></button>                       */
/*           </div>  */
/*         </div>                          */
/*       </form>*/
/*     </div>*/
/*   </div> {# end panel de cuotas pagas/becadas #}*/
/* */
/* */
/*   <div class="panel panel-primary">*/
/*     <div class="panel-heading">Listado de cuotas impagas</div>*/
/*     <div class="panel-body" id="paginacion">                                 */
/*       <div class="col-md-6"> Seleccione un año y mes para ver los alumnos que no pagaron la cuota</div>*/
/*       <form id="idForm2" action="{{ path('listado_cuotas_impagas')}}" method="post">*/
/*         <div class="col-md-6"> */
/*         */
/*           <div class="col-md-4">*/
/*             <label for="anio">Año</label>*/
/*             <select class="form-control cunsulta2" name="anio">*/
/*                 {% for año in anios %}*/
/*                   <option value="{{año}}">{{año}}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*             <label for="mes">Mes</label>*/
/*             <select class="form-control cunsulta2" name="mes">*/
/*                 {% for mes in meses %}*/
/*                   <option value="{{mes}}">{{mes}}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*             <label for="buscar">Buscar</label>*/
/*             <button class="btn btn-primary col-md-12" id="cunsulta2"><span class="glyphicon glyphicon-search"></span></button> */
/*           </div>*/
/*         </div>*/
/*       </form> */
/*     </div>     */
/*   </div> {# end panel de cuotas impagas #}*/
/* */
/*   {% if is_granted('ROLE_GESTION') %}*/
/*       <div class="panel panel-primary">*/
/*         <div class="panel-heading">Listado de comisión </div>*/
/*         <div class="panel-body" id="paginacion">                                 */
/*           <div class="col-md-6"> Monto total de comisión de las cuotas cobradas </div>                */
/*               <div class="col-md-4">*/
/*                 <label for="buscar">Ver</label>*/
/*                 <a class="btn btn-primary col-md-12" id="buscar" href="{{ path('anexa_cooperadora_backend', {'anio':'año','mes':'mes'}) }}"><span class="glyphicon glyphicon-search"></span></a>*/
/*               </div>           */
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* <script>*/
/*   $('#consulta1').click(function(){*/
/*     $.ajax({*/
/*       data: $("#idForm1").serialize()*/
/*     })*/
/*     .done(function( html ) {*/
/*       $('html').parent().html(html);*/
/* */
/*     });*/
/*   });  */
/*   $('#consulta2').click(function(){*/
/*     $.ajax({*/
/*       data: $("#idForm2").serialize()*/
/*     })*/
/*     .done(function( html ) {*/
/*       $('html').parent().html(html);*/
/*     });*/
/*   });*/
/* </script>*/
/* {% endblock %}*/
/* */
