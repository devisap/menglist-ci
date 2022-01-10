		
		<!--end::Main-->
		<script>var hostUrl = "<?= base_url()?>assets/";</script>
		<!--begin::Javascript-->
		
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<!-- <script src="<?= base_url()?>assets/js/custom/modals /new-target.js"></script> -->
		<script src="<?= base_url()?>assets/js/custom/widgets.js"></script>
		<script src="<?= base_url()?>assets/js/custom/apps/chat/chat.js"></script>
		<script src="<?= base_url()?>assets/js/custom/modals/create-app.js"></script>
		<script src="<?= base_url()?>assets/js/custom/modals/upgrade-plan.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
        <script>
            $(document).ready(function(){
                <?php
                    if($this->session->flashdata('succ_msg')){
                        echo '
                            toastr.success("'.$this->session->flashdata('succ_msg').'", "Success");
                        ';
                    }else if($this->session->flashdata('warn_msg')){
                        echo '
                            toastr.warning("'.$this->session->flashdata('warn_msg').'", "Warning");
                        ';
                    }else if($this->session->flashdata('err_msg')){
                        echo '
                            toastr.error("'.$this->session->flashdata('err_msg').'", "Error");
                        ';
                    }
                ?>
            })
            const alertPremium = modal => {
                $('#'+modal).modal('show');
            }
            $('.inptReminder').change(function(){
                let value = $(this).val()
                const name = $(this).data('name')
                if(value){
                    value = JSON.parse(value);
                    let premium = "<?= $this->session->userdata('is_premium')?>"
                    if(premium == "0" && value.length >= 2){
                        value.pop()
                        reminders = []

                        if(name == "kt_tagify_1"){
                            reminderAdd.removeAllTags()
                            for(const i of value){
                                reminders.push(i['name'])
                            }
                            reminderAdd.addTags(value)
                        }else{
                            reminderEdit.removeAllTags()
                            for(const i of value){
                                reminders.push(i['name'])
                            }
                            reminderEdit.addTags(value)
                        }


                        $('#kt_modal_new_target').modal('hide')
                        $('#mdl_premMultipleReminder').modal('show')
                    }
                }
            })
        </script>
	</body>
	<!--end::Body-->
</html>