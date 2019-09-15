@extends('layouts.app')

@section('title')
PCOF Post-test
@endsection

@section('content')
<div class="container">
	<div class="row justify-content-center">
		@include('pcof-nav')
		<div class="col-sm-12 col-md-8">
		<div class="card">
			<div class="card-header">PCOF Post Test</div>
			<div class="card-body">
				 <form>
      <div class="form-group">
        <label>Have you completed the PCOF training?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="completed_pcof" id="completed_pcof_0" type="radio" class="custom-control-input" value="Yes" required="required"> 
              <label for="completed_pcof_0" class="custom-control-label">Yes</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="completed_pcof" id="completed_pcof_1" type="radio" class="custom-control-input" value="No" required="required"> 
              <label for="completed_pcof_1" class="custom-control-label">No</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Have you used the online PCOF form to give or receive feedback at least 4 times?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="have_you_used_pcof" id="have_you_used_pcof_0" type="radio" class="custom-control-input" value="Yes" required="required"> 
              <label for="have_you_used_pcof_0" class="custom-control-label">Yes</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="have_you_used_pcof" id="have_you_used_pcof_1" type="radio" class="custom-control-input" value="No" required="required"> 
              <label for="have_you_used_pcof_1" class="custom-control-label">No</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>How familiar are you with the components of the patient-centered visit according to the PCOF model?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_familiar_components" id="how_familiar_components_0" type="radio" class="custom-control-input" value="I know none of them" required="required"> 
              <label for="how_familiar_components_0" class="custom-control-label">I know none of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_familiar_components" id="how_familiar_components_1" type="radio" class="custom-control-input" value="I know a couple of them" required="required"> 
              <label for="how_familiar_components_1" class="custom-control-label">I know a couple of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_familiar_components" id="how_familiar_components_2" type="radio" class="custom-control-input" value="I know half" required="required"> 
              <label for="how_familiar_components_2" class="custom-control-label">I know half</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_familiar_components" id="how_familiar_components_3" type="radio" class="custom-control-input" value="I know most of them" required="required"> 
              <label for="how_familiar_components_3" class="custom-control-label">I know most of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_familiar_components" id="how_familiar_components_4" type="radio" class="custom-control-input" value="I know all of them" required="required"> 
              <label for="how_familiar_components_4" class="custom-control-label">I know all of them</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Please rate your comfort level in giving communication feedback to students</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_level_communication" id="rate_comfort_level_communication_0" type="radio" class="custom-control-input" value="Very uncomfortable" required="required"> 
              <label for="rate_comfort_level_communication_0" class="custom-control-label">Very uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_level_communication" id="rate_comfort_level_communication_1" type="radio" class="custom-control-input" value="Somewhat uncomfortable" required="required"> 
              <label for="rate_comfort_level_communication_1" class="custom-control-label">Somewhat uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_level_communication" id="rate_comfort_level_communication_2" type="radio" class="custom-control-input" value="Comfortable" required="required"> 
              <label for="rate_comfort_level_communication_2" class="custom-control-label">Comfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_level_communication" id="rate_comfort_level_communication_3" type="radio" class="custom-control-input" value="Comfortable and confident" required="required"> 
              <label for="rate_comfort_level_communication_3" class="custom-control-label">Comfortable and confident</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_level_communication" id="rate_comfort_level_communication_4" type="radio" class="custom-control-input" value="Highly comfortable and adaptive" required="required"> 
              <label for="rate_comfort_level_communication_4" class="custom-control-label">Highly comfortable and adaptive</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>How does using the PCOF affect how much you enjoy teaching communication skills?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="pcof_affect_enjoy_teaching" id="pcof_affect_enjoy_teaching_0" type="radio" required="required" class="custom-control-input" value="N/A – I have never used the PCOF"> 
              <label for="pcof_affect_enjoy_teaching_0" class="custom-control-label">N/A – I have never used the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="pcof_affect_enjoy_teaching" id="pcof_affect_enjoy_teaching_1" type="radio" required="required" class="custom-control-input" value="It is unpleasant to give feedback using the PCOF"> 
              <label for="pcof_affect_enjoy_teaching_1" class="custom-control-label">It is unpleasant to give feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="pcof_affect_enjoy_teaching" id="pcof_affect_enjoy_teaching_2" type="radio" required="required" class="custom-control-input" value="I tolerate giving feedback using the PCOF"> 
              <label for="pcof_affect_enjoy_teaching_2" class="custom-control-label">I tolerate giving feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="pcof_affect_enjoy_teaching" id="pcof_affect_enjoy_teaching_3" type="radio" required="required" class="custom-control-input" value="Giving feedback using the PCOF is neither unpleasant nor enjoyable (neutral)"> 
              <label for="pcof_affect_enjoy_teaching_3" class="custom-control-label">Giving feedback using the PCOF is neither unpleasant nor enjoyable (neutral)</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="pcof_affect_enjoy_teaching" id="pcof_affect_enjoy_teaching_4" type="radio" required="required" class="custom-control-input" value="I enjoy giving feedback using the PCOF"> 
              <label for="pcof_affect_enjoy_teaching_4" class="custom-control-label">I enjoy giving feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="pcof_affect_enjoy_teaching" id="pcof_affect_enjoy_teaching_5" type="radio" required="required" class="custom-control-input" value="Giving feedback using the PCOF is gratifying"> 
              <label for="pcof_affect_enjoy_teaching_5" class="custom-control-label">Giving feedback using the PCOF is gratifying</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>How specific are you in how you teach and offer feedback about communication skills?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_specific_you_teach" id="how_specific_you_teach_0" type="radio" required="required" class="custom-control-input" value="My vocabulary to describe communication skills is very limited"> 
              <label for="how_specific_you_teach_0" class="custom-control-label">My vocabulary to describe communication skills is very limited</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_specific_you_teach" id="how_specific_you_teach_1" type="radio" required="required" class="custom-control-input" value="I have a few expressions/terms to describe communication skills"> 
              <label for="how_specific_you_teach_1" class="custom-control-label">I have a few expressions/terms to describe communication skills</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_specific_you_teach" id="how_specific_you_teach_2" type="radio" required="required" class="custom-control-input" value="I am able to describe common communication skills"> 
              <label for="how_specific_you_teach_2" class="custom-control-label">I am able to describe common communication skills</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_specific_you_teach" id="how_specific_you_teach_3" type="radio" required="required" class="custom-control-input" value="I can describe communication skills that apply to most situations"> 
              <label for="how_specific_you_teach_3" class="custom-control-label">I can describe communication skills that apply to most situations</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_specific_you_teach" id="how_specific_you_teach_4" type="radio" required="required" class="custom-control-input" value="I can be articulate and specific in describing a wide range of communication skills"> 
              <label for="how_specific_you_teach_4" class="custom-control-label">I can be articulate and specific in describing a wide range of communication skills</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Please rate your comfort using patient centered communication skills in your own clinical practice</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_patient_skills" id="rate_comfort_patient_skills_0" type="radio" class="custom-control-input" value="Very uncomfortable" required="required"> 
              <label for="rate_comfort_patient_skills_0" class="custom-control-label">Very uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_patient_skills" id="rate_comfort_patient_skills_1" type="radio" class="custom-control-input" value="Somewhat uncomfortable" required="required"> 
              <label for="rate_comfort_patient_skills_1" class="custom-control-label">Somewhat uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_patient_skills" id="rate_comfort_patient_skills_2" type="radio" class="custom-control-input" value="Comfortable" required="required"> 
              <label for="rate_comfort_patient_skills_2" class="custom-control-label">Comfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_patient_skills" id="rate_comfort_patient_skills_3" type="radio" required="required" class="custom-control-input" value="Comfortable and confident"> 
              <label for="rate_comfort_patient_skills_3" class="custom-control-label">Comfortable and confident</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_patient_skills" id="rate_comfort_patient_skills_4" type="radio" required="required" class="custom-control-input" value="Highly comfortable and adaptive"> 
              <label for="rate_comfort_patient_skills_4" class="custom-control-label">Highly comfortable and adaptive</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_0" type="checkbox" class="custom-control-input" value="Establishes Rapport" required="required"> 
              <label for="check_skills_0" class="custom-control-label">Establishes Rapport</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_1" type="checkbox" class="custom-control-input" value="Maintains Relationship Throughout the Visit" required="required"> 
              <label for="check_skills_1" class="custom-control-label">Maintains Relationship Throughout the Visit</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_2" type="checkbox" class="custom-control-input" value="fishCollaborative upfront agenda setting" required="required"> 
              <label for="check_skills_2" class="custom-control-label">Collaborative upfront agenda setting</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_3" type="checkbox" required="required" class="custom-control-input" value="Maintains Efficiency using transparent (out loud) thinking and respectful interruption"> 
              <label for="check_skills_3" class="custom-control-label">Maintains Efficiency using transparent (out loud) thinking and respectful interruption</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_4" type="checkbox" required="required" class="custom-control-input" value="Gathering Information"> 
              <label for="check_skills_4" class="custom-control-label">Gathering Information</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_5" type="checkbox" required="required" class="custom-control-input" value="Assessing Patient or Family Perspective on Health"> 
              <label for="check_skills_5" class="custom-control-label">Assessing Patient or Family Perspective on Health</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_6" type="checkbox" required="required" class="custom-control-input" value="Electronic Medical Record Use"> 
              <label for="check_skills_6" class="custom-control-label">Electronic Medical Record Use</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_7" type="checkbox" required="required" class="custom-control-input" value="Physical Exam"> 
              <label for="check_skills_7" class="custom-control-label">Physical Exam</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_8" type="checkbox" required="required" class="custom-control-input" value="Sharing Information"> 
              <label for="check_skills_8" class="custom-control-label">Sharing Information</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_9" type="checkbox" required="required" class="custom-control-input" value="Behavior Change/Self Management"> 
              <label for="check_skills_9" class="custom-control-label">Behavior Change/Self Management</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_10" type="checkbox" required="required" class="custom-control-input" value="Co-creating a plan"> 
              <label for="check_skills_10" class="custom-control-label">Co-creating a plan</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_11" type="checkbox" required="required" class="custom-control-input" value="Closure"> 
              <label for="check_skills_11" class="custom-control-label">Closure</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_12" type="checkbox" required="required" class="custom-control-input" value="N/A"> 
              <label for="check_skills_12" class="custom-control-label">N/A</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="how_completing_module_changed">How has completing this module changed the way you manage time during patient encounters?</label> 
        <textarea id="how_completing_module_changed" name="how_completing_module_changed" cols="40" rows="5" required="required" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="reflecting_feedback">Now, reflecting on your observation and feedback skills at the time of the pretest, please answer these questions as you would have before you started this module.</label> 
        <textarea id="reflecting_feedback" name="reflecting_feedback" cols="40" rows="5" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label>How familiar are you with the components of the patient-centered visit according to the PCOF model?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_familiar_components_2" id="how_familiar_components_2_0" type="radio" class="custom-control-input" value="I know none of them" required="required"> 
              <label for="how_familiar_components_2_0" class="custom-control-label">I know none of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_familiar_components_2" id="how_familiar_components_2_1" type="radio" class="custom-control-input" value="I know a couple of them" required="required"> 
              <label for="how_familiar_components_2_1" class="custom-control-label">I know a couple of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_familiar_components_2" id="how_familiar_components_2_2" type="radio" class="custom-control-input" value="I know half" required="required"> 
              <label for="how_familiar_components_2_2" class="custom-control-label">I know half</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_familiar_components_2" id="how_familiar_components_2_3" type="radio" class="custom-control-input" value="I know most of them" required="required"> 
              <label for="how_familiar_components_2_3" class="custom-control-label">I know most of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_familiar_components_2" id="how_familiar_components_2_4" type="radio" class="custom-control-input" value="I know all of them" required="required"> 
              <label for="how_familiar_components_2_4" class="custom-control-label">I know all of them</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Please rate your comfort level in giving communication feedback to students</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_level_communication" id="rate_comfort_level_communication_0" type="radio" class="custom-control-input" value="Very uncomfortable" required="required"> 
              <label for="rate_comfort_level_communication_0" class="custom-control-label">Very uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_level_communication" id="rate_comfort_level_communication_1" type="radio" class="custom-control-input" value="Somewhat uncomfortable" required="required"> 
              <label for="rate_comfort_level_communication_1" class="custom-control-label">Somewhat uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_level_communication" id="rate_comfort_level_communication_2" type="radio" class="custom-control-input" value="Comfortable" required="required"> 
              <label for="rate_comfort_level_communication_2" class="custom-control-label">Comfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_level_communication" id="rate_comfort_level_communication_3" type="radio" required="required" class="custom-control-input" value="Comfortable and confident"> 
              <label for="rate_comfort_level_communication_3" class="custom-control-label">Comfortable and confident</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_level_communication" id="rate_comfort_level_communication_4" type="radio" required="required" class="custom-control-input" value="Highly comfortable and adaptive"> 
              <label for="rate_comfort_level_communication_4" class="custom-control-label">Highly comfortable and adaptive</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>How does using the PCOF affect how much you enjoy teaching communication skills?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="pcof_affect_enjoy_teaching_2" id="pcof_affect_enjoy_teaching_2_0" type="radio" required="required" class="custom-control-input" value="N/A – I have never used the PCOF"> 
              <label for="pcof_affect_enjoy_teaching_2_0" class="custom-control-label">N/A – I have never used the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="pcof_affect_enjoy_teaching_2" id="pcof_affect_enjoy_teaching_2_1" type="radio" required="required" class="custom-control-input" value="It is unpleasant to give feedback using the PCOF"> 
              <label for="pcof_affect_enjoy_teaching_2_1" class="custom-control-label">It is unpleasant to give feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="pcof_affect_enjoy_teaching_2" id="pcof_affect_enjoy_teaching_2_2" type="radio" required="required" class="custom-control-input" value="I tolerate giving feedback using the PCOF"> 
              <label for="pcof_affect_enjoy_teaching_2_2" class="custom-control-label">I tolerate giving feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="pcof_affect_enjoy_teaching_2" id="pcof_affect_enjoy_teaching_2_3" type="radio" required="required" class="custom-control-input" value="Giving feedback using the PCOF is neither unpleasant nor enjoyable (neutral)"> 
              <label for="pcof_affect_enjoy_teaching_2_3" class="custom-control-label">Giving feedback using the PCOF is neither unpleasant nor enjoyable (neutral)</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="pcof_affect_enjoy_teaching_2" id="pcof_affect_enjoy_teaching_2_4" type="radio" required="required" class="custom-control-input" value="I enjoy giving feedback using the PCOF"> 
              <label for="pcof_affect_enjoy_teaching_2_4" class="custom-control-label">I enjoy giving feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="pcof_affect_enjoy_teaching_2" id="pcof_affect_enjoy_teaching_2_5" type="radio" required="required" class="custom-control-input" value="Giving feedback using the PCOF is gratifying"> 
              <label for="pcof_affect_enjoy_teaching_2_5" class="custom-control-label">Giving feedback using the PCOF is gratifying</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>How specific are you in how you teach and offer feedback about communication skills?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_specific_you_teach_2" id="how_specific_you_teach_2_0" type="radio" required="required" class="custom-control-input" value="My vocabulary to describe communication skills is very limited"> 
              <label for="how_specific_you_teach_2_0" class="custom-control-label">My vocabulary to describe communication skills is very limited</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_specific_you_teach_2" id="how_specific_you_teach_2_1" type="radio" required="required" class="custom-control-input" value="I have a few expressions/terms to describe communication skills"> 
              <label for="how_specific_you_teach_2_1" class="custom-control-label">I have a few expressions/terms to describe communication skills</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_specific_you_teach_2" id="how_specific_you_teach_2_2" type="radio" required="required" class="custom-control-input" value="I am able to describe common communication skills"> 
              <label for="how_specific_you_teach_2_2" class="custom-control-label">I am able to describe common communication skills</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_specific_you_teach_2" id="how_specific_you_teach_2_3" type="radio" required="required" class="custom-control-input" value="I can describe communication skills that apply to most situations"> 
              <label for="how_specific_you_teach_2_3" class="custom-control-label">I can describe communication skills that apply to most situations</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="how_specific_you_teach_2" id="how_specific_you_teach_2_4" type="radio" required="required" class="custom-control-input" value="I can be articulate and specific in describing a wide range of communication skills"> 
              <label for="how_specific_you_teach_2_4" class="custom-control-label">I can be articulate and specific in describing a wide range of communication skills</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Please rate your comfort using patient centered communication skills in your own clinical practice</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_patient_skills" id="rate_comfort_patient_skills_0" type="radio" class="custom-control-input" value="Very uncomfortable" required="required"> 
              <label for="rate_comfort_patient_skills_0" class="custom-control-label">Very uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_patient_skills" id="rate_comfort_patient_skills_1" type="radio" class="custom-control-input" value="Somewhat uncomfortable" required="required"> 
              <label for="rate_comfort_patient_skills_1" class="custom-control-label">Somewhat uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_patient_skills" id="rate_comfort_patient_skills_2" type="radio" class="custom-control-input" value="Comfortable" required="required"> 
              <label for="rate_comfort_patient_skills_2" class="custom-control-label">Comfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_patient_skills" id="rate_comfort_patient_skills_3" type="radio" required="required" class="custom-control-input" value="Comfortable and confident"> 
              <label for="rate_comfort_patient_skills_3" class="custom-control-label">Comfortable and confident</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="rate_comfort_patient_skills" id="rate_comfort_patient_skills_4" type="radio" required="required" class="custom-control-input" value="Highly comfortable and adaptive"> 
              <label for="rate_comfort_patient_skills_4" class="custom-control-label">Highly comfortable and adaptive</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_0" type="checkbox" required="required" class="custom-control-input" value="Establishes Rapport"> 
              <label for="check_skills_0" class="custom-control-label">Establishes Rapport</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_1" type="checkbox" required="required" class="custom-control-input" value="Maintains Relationship Throughout the Visit"> 
              <label for="check_skills_1" class="custom-control-label">Maintains Relationship Throughout the Visit</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_2" type="checkbox" required="required" class="custom-control-input" value="Collaborative upfront agenda setting"> 
              <label for="check_skills_2" class="custom-control-label">Collaborative upfront agenda setting</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_3" type="checkbox" required="required" class="custom-control-input" value="Maintains Efficiency using transparent (out loud) thinking and respectful interruption"> 
              <label for="check_skills_3" class="custom-control-label">Maintains Efficiency using transparent (out loud) thinking and respectful interruption</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_4" type="checkbox" required="required" class="custom-control-input" value="Gathering Information"> 
              <label for="check_skills_4" class="custom-control-label">Gathering Information</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_5" type="checkbox" required="required" class="custom-control-input" value="Assessing Patient or Family Perspective on Health"> 
              <label for="check_skills_5" class="custom-control-label">Assessing Patient or Family Perspective on Health</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_6" type="checkbox" required="required" class="custom-control-input" value="Electronic Medical Record Use"> 
              <label for="check_skills_6" class="custom-control-label">Electronic Medical Record Use</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_7" type="checkbox" required="required" class="custom-control-input" value="Physical Exam"> 
              <label for="check_skills_7" class="custom-control-label">Physical Exam</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_8" type="checkbox" required="required" class="custom-control-input" value="Sharing Information"> 
              <label for="check_skills_8" class="custom-control-label">Sharing Information</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_9" type="checkbox" required="required" class="custom-control-input" value="Behavior Change/Self Management"> 
              <label for="check_skills_9" class="custom-control-label">Behavior Change/Self Management</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_10" type="checkbox" required="required" class="custom-control-input" value="Co-creating a plan"> 
              <label for="check_skills_10" class="custom-control-label">Co-creating a plan</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_11" type="checkbox" required="required" class="custom-control-input" value="Closure"> 
              <label for="check_skills_11" class="custom-control-label">Closure</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="check_skills" id="check_skills_12" type="checkbox" required="required" class="custom-control-input" value="N/A"> 
              <label for="check_skills_12" class="custom-control-label">N/A</label>
            </div>
          </div>
        </div>
      </div> 
      <div class="form-group">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
			</div>
		</div>
		</div>
	</div>
</div>
@endsection