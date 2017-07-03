<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	    <div class="form-group">
	        <div class="input-group col-lg-12">
	         <!--  {!! Form::label('branchCode', 'Select Branch Code') !!} -->
              <?php 
                  foreach($branches as $branch)
                  {
                      $branchDetails[$branch->id] = $branch->code;
                  }
                ?>
              {!! Form::select('branchCode', $branchDetails, null, ['placeholder'=>'Select Branch Code', 'class'=>'form-control', 'id'=>'branchCode', 'required'] ) !!}
	        </div>
	    </div>
	    <div class="form-group">
	        <div class="input-group col-lg-12">
	          <!-- {!! Form::label('branchName', 'Select Branch Name') !!} -->
              <?php 
                  foreach($branches as $branch)
                  {
                      $branchDetails[$branch->id] = $branch->name;
                  }
                ?>
              {!! Form::select('branchName', $branchDetails, null, ['placeholder'=>'Select Branch Name', 'class'=>'form-control', 'id'=>'branchName', 'required'] ) !!}
	        </div>
	    </div>
	    <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('associatedVendor', '', ['id'=>'associatedVendor', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Associated Vendor']) !!}
	        </div>
        </div>
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('vendorCode', '', ['id'=>'vendorCode', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Vendor Code']) !!}
	        </div>
        </div>
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('qSupervisor', '', ['id'=>'qSupervisor', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Quality Supervisor']) !!}
	        </div>
        </div>
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('qsCode', '', ['id'=>'qsCode', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Quality Supervisor Code']) !!}
	        </div>
        </div>
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('bunkarSakhi', '', ['id'=>'bunkarSakhi', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Bunkar Sakhi']) !!}
	        </div>
        </div>
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('bunkarSakhiCode', '', ['id'=>'bunkarSakhiCode', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Bunkar Sakhi Code']) !!}
	        </div>
        </div>
	   <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('loomId', '', ['id'=>'loomId', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Loom Id']) !!}
	        </div>
        </div>
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          <!-- {!! Form::label('village', 'Select Village Name') !!} -->
              <?php 
                  foreach($villages as $village)
                  {
                      $villageDetails[$village->id] = $village->name;
                  }
                ?>
              {!! Form::select('village', $villageDetails, null, ['placeholder'=>'Select Village Name', 'class'=>'form-control', 'id'=>'branchName', 'required'] ) !!}
	        </div>
	    </div>
	    <div class="form-group">
	        <div class="input-group col-lg-12">
	          <!-- {!! Form::label('villageCode', 'Select Village Code') !!} -->
              <?php 
                  foreach($villages as $village)
                  {
                      $villageDetails[$village->branch_code] = $village->branch_code;
                  }
                ?>
              {!! Form::select('villageCode', $villageDetails, null, ['placeholder'=>'Select Village Name', 'class'=>'form-control', 'id'=>'branchName', 'required'] ) !!}
	        </div>
	    </div>
	    <div class="form-group">
	        <div class="input-group col-lg-12">
	        <!--   {!! Form::label('tehsil', 'Select Tehsil Name') !!} -->
              <?php 
                  foreach($tehsils as $tehsil)
                  {
                      $tehsilDetails[$tehsil->id] = $tehsil->name;
                  }
                ?>
              {!! Form::select('tehsil', $tehsilDetails, null, ['placeholder'=>'Select Tehsil Name', 'class'=>'form-control', 'id'=>'branchName', 'required'] ) !!}
	        </div>
	    </div>
	    <div class="form-group">
	        <div class="input-group col-lg-12">
	          <!-- {!! Form::label('tehsilCode', 'Select Tehsil Code') !!} -->
              <?php 
                  foreach($tehsils as $tehsil)
                  {
                      $tehsilDetails[$tehsil->branch_code] = $tehsil->branch_code;
                  }
                ?>
              {!! Form::select('tehsilCode', $tehsilDetails, null, ['placeholder'=>'Select Tehsil Code', 'class'=>'form-control', 'id'=>'branchName', 'required'] ) !!}
	        </div>
	    </div>
	     <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('loomSize', '', ['id'=>'loomSize', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Loom Size']) !!}
	        </div>
        </div>
    </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
       
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('availableWidth', '', ['id'=>'availableWidth', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Available Width']) !!}
	        </div>
        </div>
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('khaliMaap', '', ['id'=>'khaliMaap', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Khali Ka Maap']) !!}
	        </div>
        </div>
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('weaverCount', '', ['id'=>'weaverCount', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Weaver Count']) !!}
	        </div>
        </div>
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('ownership', '', ['id'=>'ownership', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Ownership']) !!}
	        </div>
        </div>
		<div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('constructionCode', '', ['id'=>'constructionCode', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Construction Code']) !!}
	        </div>
        </div>
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('state', '', ['id'=>'state', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Available Width']) !!}
	        </div>
        </div>
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('postCode', '', ['id'=>'postCode', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Post Code']) !!}
	        </div>
        </div>
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('postCity', '', ['id'=>'postCity', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Post City']) !!}
	        </div>
        </div>
        <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('disAssembled', '', ['id'=>'disAssembled', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Dis Assembled']) !!}
	        </div>
        </div>
         <div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form ::text('blocked', '', ['id'=>'blocked', 'required', 'class'=>'form-control', 'autocomplete'=>'off', 'placeholder' =>'Blocked']) !!}
	        </div>
        </div>

 		<div class="form-group"> 
		    <div class="m-t-10">
		    	{!! Form::label('blockedDate', 'Blocked Date') !!}
	        	<div class="input-group col-lg-12">
	          		{!! Form::text('blockedDate', '', ['class'=>'form-control', 'id'=>'blockedDate', 'placeholder'=>'mm-dd-yyyy']) !!}
	          		 <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
		        </div>
		    </div>
		</div>
		<div class="form-group"> 
		    <div class="m-t-10">
		    	{!! Form::label('loomCreationDate', 'Loom Creation Date') !!}
	        	<div class="input-group col-lg-12">
	          		{!! Form::text('loomCreationDate', '', ['class'=>'form-control', 'id'=>'loomCreationDate', 'placeholder'=>'mm-dd-yyyy']) !!}
	          		 <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
		        </div>
		    </div>
		</div>
		<div class="form-group"> 
		    <div class="m-t-10">
		    	{!! Form::label('loomMenufacturingDate', 'Loom MenufacturingDate') !!}
	        	<div class="input-group col-lg-12">
	          		{!! Form::text('loomMenufacturingDate', '', ['class'=>'form-control', 'id'=>'loomMenufacturingDate', 'placeholder'=>'mm-dd-yyyy']) !!}
	          		 <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
		        </div>
		    </div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
	        <div class="input-group col-lg-12">
	          {!! Form::label('description', 'Loom Issue Details') !!} 
	          {!! Form ::textarea('loomIssueDetails', null, ['id'=>'loomIssueDetails', 'required', 'class'=>'form-control', 'autocomplete'=>'off']) !!}
	        </div>
        </div>
		<div class="form-group">
	        <div class="input-group col-lg-12">
	        {!! Form::label('description', 'Write Description') !!} 
	          {!! Form ::textarea('description', null, ['id'=>'description', 'required', 'class'=>'form-control', 'autocomplete'=>'off']) !!}
	        </div>
        </div>
        
	    
	     

 	</div>

</div>
<hr>
<div class="row m-b-20">
	<div class="col-lg-12">
	   {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary pull-right', 'name'=>'newTrainingSubmit', 'id'=>'newTrainingSubmit']) !!}
	</div>
</div>
