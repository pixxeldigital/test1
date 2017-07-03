@extends('myLayout.app')
@section('pluginCss')
<!-- Editatable  Css-->
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/magnific-popup/dist/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/jquery-datatables-editable/datatables.css') }}" />
 <!-- Notification css (Toastr) -->
        <link href="{{ URL::asset('assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />

@endsection()
@section('content')
<div class="row">
  <div class="col-sm-12">
	<div class="panel">
	    <div class="panel-body">
	        <div class="row">
	        <div class="alert alert-danger print-error-msg" style="display:none">
		        <ul></ul>
		    </div>
	            <div class="col-sm-6">
	                <div class="m-b-30">
	                    <button id="addToTable" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></button>
	                </div>
	            </div>
	        </div>

	        <div class="editable-responsive">
	            <table class="table table-striped" id="datatable-editable">
	                <thead>
	                    <tr>
	                        <th>Village</th>
	                        <th>Branch Name</th>
	                        <th>Branch Code</th>
	                        <th>Status</th>
	                        <th>Actions</th>
	                    </tr>
	                </thead>
	                <tbody>
	               	 @foreach($tehsils as $tehsil)
	                    <tr class="gradeX">
	                        <td>{{ $tehsil->name }}</td>
	                        <td>{{ $tehsil->branch_name }}</td>
	                        <td>{{ $tehsil->branch_code }}</td>
	                        <td>{{ $tehsil->status }}</td>
	                        <td class="actions">
	                            <a href="#" class="hidden on-editing save-row"><i class="fa fa-save" id="save-{{$tehsil->id}}" onclick="return saveData({{$tehsil->id}})"></i></a>
	                            <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                            <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                            <a href="#" class="on-default remove-row" id="delete-{{$tehsil->id}}" onclick="return deleteData({{$tehsil->id}})"><i class="fa fa-trash-o"></i></a>
	                        </td>
	                    </tr>
	                   @endforeach
	                </tbody>
	            </table>
	        </div>
	      </div>
        </div>
    </div>
</div> 
<!-- MODAL -->
			<div id="dialog" class="modal-block mfp-hide">
				<section class="panel panel-info panel-color">
					<header class="panel-heading">
						<h2 class="panel-title">Are you sure?</h2>
					</header>
					<div class="panel-body">
						<div class="modal-wrapper">
							<div class="modal-text">
								<p>Are you sure that you want to delete this row?</p>
							</div>
						</div>

						<div class="row m-t-20">
							<div class="col-md-12 text-right">
								<button id="dialogConfirm" class="btn btn-primary waves-effect waves-light">Confirm</button>
								<button id="dialogCancel" class="btn btn-default waves-effect">Cancel</button>
							</div>
						</div>
					</div>

				</section>
			</div>
			<!-- end Modal -->

@endsection()
@section('pluginJs')
<script src="{{URL::asset('assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js') }}"></script>
<script src="{{URL::asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{URL::asset('assets/plugins/tiny-editable/mindmup-editabletable.js') }}"></script>
<script src="{{URL::asset('assets/plugins/tiny-editable/numeric-input-example.js') }}"></script>
<!-- init -->
<!-- <script src="{{URL::asset('assets/pages/datatables.editable.init.js') }}"></script> -->
 <!-- Toastr js -->
 <script src="{{URL::asset('assets/plugins/toastr/toastr.min.js') }}"></script>
@endsection()
@section('customJs')
<script>
function saveData(id)
{
	/* get the id and write ajax here */
	var url = "http://192.168.0.27/loom/public/tehsil/" +id;
	var name = $('#data_0').val();
	var branch_name = $('#data_1').val();
	var branch_code = $('#data_2').val();
	var status = $('#data_3').val();
				 $.ajax({
				type: "POST",
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				url: url,
				data: {name:name, branch_name:branch_name, branch_code: branch_code, status: status, _method:"PUT"},
				success: function(response) {
					console.log(response.msg);
                            $(".toast-success").css('display','block');
                            $(".toast-success").append('<div class="toast-message">'+'Updated Succesfully'+'</div>');
                            setTimeout(function(){
                                $(".toast-success").fadeOut('slow');
                            }, 2500);
				}
			});
			
}

function deleteData(id) {
$("#dialogConfirm").click(function(){
	var url = "http://192.168.0.27/loom/public/tehsil/" +id;
    $.ajax({
      type: "DELETE",
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      url: url,
      success: function(response) {
        console.log(response.msg);
                            $(".toast-success").css('display','block');
                            $(".toast-success").append('<div class="toast-message">'+'Deleted Succesfully'+'</div>');
                            setTimeout(function(){
                                $(".toast-success").fadeOut('slow');
                            }, 2500);
      }
    });
  });
}

function addData()
{
/* Pull the values and write ajax here */
	var url = "http://192.168.0.27/loom/public/tehsil";
	var name = $('#data_0').val();
	var branch_name = $('#data_1').val();
	var branch_code = $('#data_2').val();
	var status = $('#data_3').val();
	 if((name == '') || (branch_name == '') || (branch_code == '') || (status == ''))  {
		return false;
     }
	var data = {name:name, branch_name:branch_name, branch_code: branch_code, status: status, _method:"POST"};
				 $.ajax({
				type: "POST",
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				url: url,
				data: data,
				success: function(response) {
					console.log(response);
                            if($.isEmptyObject(response.error)){
								$(".toast-success").css('display','block');
	                            $(".toast-success").append('<div class="toast-message">'+'Added Succesfully'+'</div>');
	                            setTimeout(function(){
	                                $(".toast-success").fadeOut('slow');
	                                window.location.reload();
	                            }, 2500);

				    	}else{
				    		printErrorMsg(response.error);
				    		setTimeout(function(){
	                               $(".print-error-msg").fadeOut('slow');
	                            }, 2500);
				    	}
				},
				 error: function (xhr, status, error) {
                     alert(status);
                 }
			});
}
/*function showMsg (message, class){
	$(.+"class").css('display','block');
	$(.+"class").append('<div class="+class+">'+message+'</div>');
	setTimeout(function(){
	    $(.+"class").fadeOut('slow');
	}, 2500);
}*/
 function printErrorMsg (msg) {
	$(".print-error-msg").find("ul").html('');
	$(".print-error-msg").css('display','block');
	$.each( msg, function( key, value ) {
		$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
	});
  }

function lookup(array, prop, value) {
    for (var i = 0, len = array.length; i < len; i++)
        if (array[i] && array[i][prop] === value) return array[i];
}

	(function( $ ) {

	'use strict';

	var EditableTable = {

		options: {
			addButton: '#addToTable',
			table: '#datatable-editable',
			dialog: {
				wrapper: '#dialog',
				cancelButton: '#dialogCancel',
				confirmButton: '#dialogConfirm',
			}
		},

		initialize: function() {
			this
				.setVars()
				.build()
				.events();
		},

		setVars: function() {
			this.$table				= $( this.options.table );
			this.$addButton			= $( this.options.addButton );

			// dialog
			this.dialog				= {};
			this.dialog.$wrapper	= $( this.options.dialog.wrapper );
			this.dialog.$cancel		= $( this.options.dialog.cancelButton );
			this.dialog.$confirm	= $( this.options.dialog.confirmButton );

			return this;
		},

		build: function() {
			this.datatable = this.$table.DataTable({
				aoColumns: [
					null,
					null,
					null,
					null,
					{ "bSortable": false }
				]
			});

			window.dt = this.datatable;

			return this;
		},

		events: function() {
			var _self = this;

			this.$table
				.on('click', 'a.save-row', function( e ) {
					e.preventDefault();
					_self.rowSave( $(this).closest( 'tr' ) );
				})
				.on('click', 'a.cancel-row', function( e ) {
					e.preventDefault();

					_self.rowCancel( $(this).closest( 'tr' ) );
				})
				.on('click', 'a.edit-row', function( e ) {
					e.preventDefault();

					_self.rowEdit( $(this).closest( 'tr' ) );
				})
				.on( 'click', 'a.remove-row', function( e ) {
					e.preventDefault();

					var $row = $(this).closest( 'tr' );

					$.magnificPopup.open({
						items: {
							src: _self.options.dialog.wrapper,
							type: 'inline'
						},
						preloader: false,
						modal: true,
						callbacks: {
							change: function() {
								_self.dialog.$confirm.on( 'click', function( e ) {
									e.preventDefault();

									_self.rowRemove( $row );
									$.magnificPopup.close();
								});
							},
							close: function() {
								_self.dialog.$confirm.off( 'click' );
							}
						}
					});
				});

			this.$addButton.on( 'click', function(e) {
				e.preventDefault();

				_self.rowAdd();
			});

			this.dialog.$cancel.on( 'click', function( e ) {
				e.preventDefault();
				$.magnificPopup.close();
			});

			return this;
		},

		// ==========================================================================================
		// ROW FUNCTIONS
		// ==========================================================================================
		rowAdd: function() {
			this.$addButton.attr({ 'disabled': 'disabled' });

			var actions,
				data,
				$row;

			actions = [
				'<a href="#" class="hidden on-editing save-row" onclick="return addData()"><i class="fa fa-save"></i></a>',
				'<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>',
				'<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>',
				'<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>'
			].join(' ');

			data = this.datatable.row.add([ '', '', '', '', actions ]);
			$row = this.datatable.row( data[0] ).nodes().to$();

			$row
				.addClass( 'adding' )
				.find( 'td:last' )
				.addClass( 'actions' );

			this.rowEdit( $row );

			this.datatable.order([0,'asc']).draw(); // always show fields
		},

		rowCancel: function( $row ) {
			var _self = this,
				$actions,
				i,
				data;

			if ( $row.hasClass('adding') ) {
				this.rowRemove( $row );
			} else {

				data = this.datatable.row( $row.get(0) ).data();
				this.datatable.row( $row.get(0) ).data( data );

				$actions = $row.find('td.actions');
				if ( $actions.get(0) ) {
					this.rowSetActionsDefault( $row );
				}

				this.datatable.draw();
			}
		},

		rowEdit: function( $row ) {
			var _self = this,
				data;

			data = this.datatable.row( $row.get(0) ).data();
  			
			$row.children( 'td' ).each(function( i ) {
				var $this = $( this );

				if ( $this.hasClass('actions') ) {
					_self.rowSetActionsEditing( $row );
				} else {
					$this.html( '<input type="text" class="form-control input-block" id="data_' +[i]+ '" value="' + data[i] + '" required/>' );
				}
			});
		},

		rowSave: function( $row ) {
			var _self     = this,
				$actions,
				values    = [];
				var emptyInput = [];
			values = $row.find('td').map(function() {
				var $this = $(this);
				if(($.trim( $this.find('input').val() )=='')){
				//var inputId = $this.find('input').attr('id');
				return emptyInput['id']=$this.find('input').attr('id');
				}
			});

			//alert(values.length);
			if((values.length)>0){
				//if fields are empty show error msg
					$(".print-error-msg").css('display','block');
					$(".print-error-msg").append('<div>'+'All fields are required'+'</div>');
					  setTimeout(function(){
				           $(".print-error-msg").fadeOut('slow');
				       }, 2500);
					  return false;
			}else{
				//if fields are not empty
					if ( $row.hasClass( 'adding' ) ) {
					this.$addButton.removeAttr( 'disabled' );
					$row.removeClass( 'adding' );
				}

				values = $row.find('td').map(function() {
					var $this = $(this);

					if ( $this.hasClass('actions') ) {
						_self.rowSetActionsDefault( $row );
						return _self.datatable.cell( this ).data();
					} else {
						return $.trim( $this.find('input').val() );

					}
				});
				
				this.datatable.row( $row.get(0) ).data( values );


				$actions = $row.find('td.actions');
				if ( $actions.get(0) ) {
					this.rowSetActionsDefault( $row );
				}

				this.datatable.draw();

			}
			
		},

		rowRemove: function( $row ) {
			if ( $row.hasClass('adding') ) {
				this.$addButton.removeAttr( 'disabled' );
			}

			this.datatable.row( $row.get(0) ).remove().draw();
		},

		rowSetActionsEditing: function( $row ) {
			$row.find( '.on-editing' ).removeClass( 'hidden' );
			$row.find( '.on-default' ).addClass( 'hidden' );
		},

		rowSetActionsDefault: function( $row ) {
			$row.find( '.on-editing' ).addClass( 'hidden' );
			$row.find( '.on-default' ).removeClass( 'hidden' );
		}

	};

	$(function() {
		EditableTable.initialize();
	});

}).apply( this, [ jQuery ]);
</script>

@endsection()