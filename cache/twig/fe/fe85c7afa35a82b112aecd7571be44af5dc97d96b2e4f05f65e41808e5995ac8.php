<?php

/* captcha_qa_acp_demo.html */
class __TwigTemplate_d225c228789b3fe129e52c3a9a1e06b4d0dc39f78c3dfd0e79e652b83983fd50 extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"answer\">";
        // line 2
        if ((isset($context["QA_CONFIRM_QUESTION"]) ? $context["QA_CONFIRM_QUESTION"] : null)) {
            echo " ";
            echo (isset($context["QA_CONFIRM_QUESTION"]) ? $context["QA_CONFIRM_QUESTION"] : null);
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_QUESTION");
            echo " ";
        }
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_QUESTION_EXPLAIN");
        echo "</span></dt>

\t<dd>
\t\t<input type=\"text\" tabindex=\"10\" name=\"answer\" id=\"answer\" size=\"45\" class=\"inputbox autowidth\" title=\"";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ANSWER");
        echo "\"  />
\t</dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "captcha_qa_acp_demo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  22 => 2,  19 => 1,);
    }
}
/* <dl>*/
/* 	<dt><label for="answer"><!-- IF QA_CONFIRM_QUESTION --> {QA_CONFIRM_QUESTION} <!-- ELSE --> {L_CONFIRM_QUESTION} <!-- ENDIF -->{L_COLON}</label><br /><span>{L_CONFIRM_QUESTION_EXPLAIN}</span></dt>*/
/* */
/* 	<dd>*/
/* 		<input type="text" tabindex="10" name="answer" id="answer" size="45" class="inputbox autowidth" title="{L_ANSWER}"  />*/
/* 	</dd>*/
/* </dl>*/
/* */
