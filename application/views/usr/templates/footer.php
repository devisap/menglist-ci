		
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
            const alertPremium = () => {
                alert('premium')
            }
        </script>
	</body>
	<!--end::Body-->
</html>