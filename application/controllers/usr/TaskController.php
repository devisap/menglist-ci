<?php

class TaskController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if(empty($this->session->userdata('is_logged'))){
            redirect('sign-in');
        }
        $this->load->model('Task');
    }
    public function index(){
        $data['title']      = "Task";
        $data['folders']    = $this->General->get('folder', ['EMAIL_USER' => $this->session->userdata('email')]);
        $data['tags']       = $this->General->get('tag', ['EMAIL_USER' => $this->session->userdata('email')]);

        $email          = $this->session->userdata('email');
        $currDate       = date('Y-m-d');
        $tomDate        = date('Y-m-d', strtotime("+1 day", strtotime($currDate)));
        $data['todays']     = $this->Task->get(['EMAIL_USER' => $email, 'ISFINISHED_TASK' => "0", "DATE(TGL_TASK) <" => $tomDate, 'orderBy' => "TGL_TASK ASC"]);
        

        $this->template->user('usr/VTask', $data);
    }
    public function store(){
        $tags = json_decode($_POST['TAGS_TASK']);
        unset($_POST['TAGS_TASK']);

        $reminders = json_decode($_POST['PENGINGAT_TASK']);
        unset($_POST['PENGINGAT_TASK']);

        $dataStore = $_POST;
        $dataStore['TGL_TASK'] = $_POST['TGL_TASK'] != null ? date_format(date_create($dataStore['TGL_TASK']), 'Y-m-d H:i:s') : null;
        $idTask = $this->Task->insert($dataStore);

        if($tags != null){
            foreach($tags as $item){
                $this->Task->insertTag(['ID_TASK' => $idTask, 'ID_TAG' => $item->id]);
            }
        }
        if($reminders != null){
            foreach($reminders as $item){
                $date = date('Y-m-d H:i:s', strtotime($item->reminder, strtotime($dataStore['TGL_TASK'])));
                $email = $this->session->userdata('email');
                $this->Task->insertReminder(['ID_TASK' => $idTask, 'EMAIL_USER' => $email, 'NAMA_REMINDER' => $item->value, 'REMINDER' => $date]);
            }
        }
        $this->session->set_flashdata('succ_msg', 'Successfully created a new task');
        redirect('task');
    }
    public function edit(){
        $tags = json_decode($_POST['TAGS_TASK']);
        unset($_POST['TAGS_TASK']);

        $reminders = json_decode($_POST['PENGINGAT_TASK']);
        unset($_POST['PENGINGAT_TASK']);

        $dataStore = $_POST;
        $dataStore['TGL_TASK'] = $_POST['TGL_TASK'] != null ? date_format(date_create($dataStore['TGL_TASK']), 'Y-m-d H:i:s') : null;
        $this->Task->update($dataStore);

        if($tags != null){
            $this->Task->deleteTag(['ID_TASK' => $dataStore['ID_TASK']]);
            foreach($tags as $item){
                $this->Task->insertTag(['ID_TASK' => $dataStore['ID_TASK'], 'ID_TAG' => $item->id]);
            }
        }
        if($reminders != null){
            $this->Task->deleteReminder(['ID_TASK' => $dataStore['ID_TASK']]);
            foreach($reminders as $item){
                $date = date('Y-m-d H:i:s', strtotime($item->reminder, strtotime($dataStore['TGL_TASK'])));
                $email = $this->session->userdata('email');
                $this->Task->insertReminder(['ID_TASK' => $dataStore['ID_TASK'], 'EMAIL_USER' => $email, 'NAMA_REMINDER' => $item->value, 'REMINDER' => $date]);
            }
        }
        $this->session->set_flashdata('succ_msg', 'Successfully update a task');
        redirect('task');
    }
    public function destroy(){
        $this->Task->deleteTag(['ID_TASK' => $_POST['ID_TASK']]);
        $this->Task->deleteReminder(['ID_TASK' => $_POST['ID_TASK']]);
        $this->Task->delete(['ID_TASK' => $_POST['ID_TASK']]);
        
        $this->session->set_flashdata('succ_msg', 'Successfully delete task!');
        redirect('task');
    }
    public function changeStat(){
        $this->Task->update(['ID_TASK' => $_POST['id'], 'ISFINISHED_TASK' => $_POST['status']]);
        
        redirect('task');
    }
    public function ajxGet(){
        $task           = $this->Task->getById($_POST['id']);
        $taskTag        = $this->General->get('v_task_tag', ['ID_TASK' => $_POST['id']]);
        $reminderTag    = $this->General->get('task_reminder', ['ID_TASK' => $_POST['id']]);
        echo json_encode(['TASK' => $task, 'TASKTAG' => $taskTag, 'TASKREMINDER' => $reminderTag]);
    }
    public function getDataTask(){
        $email          = $this->session->userdata('email');
        $currDate       = date('Y-m-d');
        $tomDate        = date('Y-m-d', strtotime("+1 day", strtotime($currDate)));

        echo json_encode([
            'HTMLTODAY'      => $this->getToday($email, $currDate, $tomDate),
            'HTMLTOMORROWS'  => $this->getTomorrows($email, $tomDate),
            'HTMLNXTWEEKS'   => $this->getNxtWeeks($email, $tomDate), 
            'HTMLUNDATES'    => $this->getUndates($email), 
            'HTMLCOMPLETEDS' => $this->getCompleteds($email)
        ]);
    }
    public function getToday($email, $currDate, $tomDate){
        $todays     = $this->Task->get(['EMAIL_USER' => $email, 'ISFINISHED_TASK' => "0", "DATE(TGL_TASK) <" => $tomDate, 'orderBy' => "TGL_TASK ASC"]);
        $html  = '';
        if($todays != null){
            foreach ($todays as $item) {
                $status = "";
                if($item->PRIORITAS_TASK != "0"){
                    $status = '
                        <span class="ps-4 '.$item->COLOR_MP.'" style="font-weight: 700;" data-bs-toggle="tooltip" data-bs-placement="top" title="'.$item->NAMA_MP.'">'.$item->ALIAS_MP.'&nbsp;</span>
                    ';
                }

                $date = "";
                if($item->TGL_TASK != null){
                    if($item->TGL_TASK < $currDate){
                        $date='
                            <span class="text-danger">'.date_format(date_create($item->TGL_TASK), 'j M Y H:i').'</span>
                        ';
                    }else{
                        $date='
                            <span class="text-secondary">'.date_format(date_create($item->TGL_TASK), 'H:i').'</span>
                        ';
                    }
                }

                $taskTag 	 = $this->General->get('v_task_tag', ['ID_TASK' => $item->ID_TASK]);
                $taskTagHtml = "";
                foreach ($taskTag as $item2) {
                    $taskTagHtml .= '<span class="badge '.$item2->BADGE_MC.'"><i class="bi bi-tag-fill text-'.$item2->COLOR_MC.'"></i> '.$item2->NAMA_TAG.'</span>&nbsp;';
                }

                $html .= '
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <div class="menu-link">
                                <a class="mdlEdit" onclick="mdlEditOnClick('.$item->ID_TASK.')" data-bs-toggle="modal" data-bs-target="#mdlEditTask"><i class="bi bi-three-dots-vertical"></i></a>
                                <label class="ps-lg-3 form-check form-check-custom form-check-solid me-10" >
                                    <input class="form-check-input h-20px w-20px" onclick="taskCheck('.$item->ID_TASK.', 1)" type="checkbox" name="" value="1" />
                                    '.$status.'
                                    <span class="fw-bold ps-4">'.$item->NAMA_TASK.'</span>
                                </label>
                                <div style="right: 5px;">
                                    '.$taskTagHtml.'
                                    '.$date.'
                                </div>
                            </div>
                        </div>
                    </div>		
                ';
            }
        }else{
            $html .= '
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <div class="menu-link" style="text-align: center;">
                            <svg width="24pt" height="24pt" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <g transform="translate(0 512) scale(.1 -.1)">
                                <path fill="#A1A5B7" d="m2495 4466c-41-18-83-69-90-109-4-18-5-118-3-224 3-210 5-218 72-267 39-29 133-29 172 0 68 51 69 53 69 294 0 205-1 220-21 246-11 15-32 37-46 47-33 25-113 32-153 13z"/>
                                <path fill="#A1A5B7" d="m1416 3977c-71-39-100-127-68-203 13-31 264-263 314-290 59-33 155-6 195 55 27 40 31 117 9 160-21 40-270 270-311 287-49 20-94 17-139-9z"/>
                                <path fill="#A1A5B7" d="m3550 3979c-50-31-279-247-296-280-23-45-18-119 10-160 44-65 136-88 203-51 46 25 281 238 304 275 81 133-87 297-221 216z"/>
                                <path fill="#A1A5B7" d="m415 2866c-41-18-83-69-90-109-3-18-4-478-3-1024 3-984 3-992 24-1019 11-15 33-37 48-48l27-21h2139 2139l27 21c15 11 37 33 48 48 21 27 21 33 21 1046s0 1019-21 1046c-11 15-33 37-48 48-27 20-39 21-406 21s-379-1-406-21c-15-11-37-33-48-48-21-27-21-39-24-642l-2-614h-1280-1280l-2 614c-3 603-3 615-24 642-11 15-33 37-48 48-26 20-41 21-394 23-290 2-373 0-397-11zm545-906c0-666-2-645 66-696l37-29h1497 1497l37 29c68 51 66 30 66 696v600h160 160v-800-800h-1920-1920v800 800h160 160v-600z"/>
                                </g>
                            </svg>
                            <span class="ps-3 pt-2 text-gray-500 fw-bold">Empty</span>
                        </div>
                    </div>
                </div>
            ';
        }
        return $html;
    }

    public function getTomorrows($email, $tomDate){
        $tomorrows  = $this->Task->get(['EMAIL_USER' => $email, 'ISFINISHED_TASK' => "0", "DATE(TGL_TASK)" => $tomDate, 'orderBy' => "TGL_TASK ASC"]);
        $html       = '';
        

        if($tomorrows != null){
            foreach ($tomorrows as $item) {
                $status = "";
                if($item->PRIORITAS_TASK){
                    $status = '
                        <span class="ps-4 '.$item->COLOR_MP.'" style="font-weight: 700;" data-bs-toggle="tooltip" data-bs-placement="top" title="'.$item->NAMA_MP.'">'.$item->ALIAS_MP.'&nbsp;</span>
                    ';
                }

                $date = "";
                if($item->TGL_TASK != null){
                    $date='
                        <span class="text-secondary">'.date_format(date_create($item->TGL_TASK), 'H:i').'</span>
                    ';
                }

                $taskTag 	 = $this->General->get('v_task_tag', ['ID_TASK' => $item->ID_TASK]);
                $taskTagHtml = "";
                foreach ($taskTag as $item2) {
                    $taskTagHtml .= '<span class="badge '.$item2->BADGE_MC.'"><i class="bi bi-tag-fill text-'.$item2->COLOR_MC.'"></i> '.$item2->NAMA_TAG.'</span>&nbsp;';
                }

                $html .= '
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <div class="menu-link">
                                <a class="mdlEdit" onclick="mdlEditOnClick('.$item->ID_TASK.')" data-bs-toggle="modal" data-bs-target="#mdlEditTask"><i class="bi bi-three-dots-vertical"></i></a>
                                <label class="ps-lg-3 form-check form-check-custom form-check-solid me-10" >
                                    <input class="form-check-input h-20px w-20px" onclick="taskCheck('.$item->ID_TASK.', 1)" type="checkbox" name="" value="1" />
                                    '.$status.'
                                    <span class="fw-bold ps-4">'.$item->NAMA_TASK.'</span>
                                </label>
                                '.$taskTagHtml.'
                                '.$date.'
                            </div>
                        </div>
                    </div>		
                ';
            }
        }else{
            $html .= '
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <div class="menu-link" style="text-align: center;">
                            <svg width="24pt" height="24pt" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <g transform="translate(0 512) scale(.1 -.1)">
                                <path fill="#A1A5B7" d="m2495 4466c-41-18-83-69-90-109-4-18-5-118-3-224 3-210 5-218 72-267 39-29 133-29 172 0 68 51 69 53 69 294 0 205-1 220-21 246-11 15-32 37-46 47-33 25-113 32-153 13z"/>
                                <path fill="#A1A5B7" d="m1416 3977c-71-39-100-127-68-203 13-31 264-263 314-290 59-33 155-6 195 55 27 40 31 117 9 160-21 40-270 270-311 287-49 20-94 17-139-9z"/>
                                <path fill="#A1A5B7" d="m3550 3979c-50-31-279-247-296-280-23-45-18-119 10-160 44-65 136-88 203-51 46 25 281 238 304 275 81 133-87 297-221 216z"/>
                                <path fill="#A1A5B7" d="m415 2866c-41-18-83-69-90-109-3-18-4-478-3-1024 3-984 3-992 24-1019 11-15 33-37 48-48l27-21h2139 2139l27 21c15 11 37 33 48 48 21 27 21 33 21 1046s0 1019-21 1046c-11 15-33 37-48 48-27 20-39 21-406 21s-379-1-406-21c-15-11-37-33-48-48-21-27-21-39-24-642l-2-614h-1280-1280l-2 614c-3 603-3 615-24 642-11 15-33 37-48 48-26 20-41 21-394 23-290 2-373 0-397-11zm545-906c0-666-2-645 66-696l37-29h1497 1497l37 29c68 51 66 30 66 696v600h160 160v-800-800h-1920-1920v800 800h160 160v-600z"/>
                                </g>
                            </svg>
                            <span class="ps-3 pt-2 text-gray-500 fw-bold">Empty</span>
                        </div>
                    </div>
                </div>
            ';
        }
        return $html;
    }
    public function getNxtWeeks($email, $tomDate){
        $nxtWeeks   = $this->Task->get(['EMAIL_USER' => $email, 'ISFINISHED_TASK' => "0", "DATE(TGL_TASK) >" => $tomDate, 'orderBy' => "TGL_TASK ASC"]);
        $html       = '';

        if($nxtWeeks != null){
            foreach ($nxtWeeks as $item) {
                $status = "";
                if($item->PRIORITAS_TASK){
                    $status = '
                        <span class="ps-4 '.$item->COLOR_MP.'" style="font-weight: 700;" data-bs-toggle="tooltip" data-bs-placement="top" title="'.$item->NAMA_MP.'">'.$item->ALIAS_MP.'&nbsp;</span>
                    ';
                }

                $date = "";
                if($item->TGL_TASK != null){
                    $date='
                        <span class="text-secondary">'.date_format(date_create($item->TGL_TASK), 'j M Y H:i').'</span>
                    ';
                }

                $taskTag 	 = $this->General->get('v_task_tag', ['ID_TASK' => $item->ID_TASK]);
                $taskTagHtml = "";
                foreach ($taskTag as $item2) {
                    $taskTagHtml .= '<span class="badge '.$item2->BADGE_MC.'"><i class="bi bi-tag-fill text-'.$item2->COLOR_MC.'"></i> '.$item2->NAMA_TAG.'</span>&nbsp;';
                }

                $html .= '
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <div class="menu-link">
                                <a class="mdlEdit" onclick="mdlEditOnClick('.$item->ID_TASK.')" data-bs-toggle="modal" data-bs-target="#mdlEditTask"><i class="bi bi-three-dots-vertical"></i></a>
                                <label class="ps-lg-3 form-check form-check-custom form-check-solid me-10" >
                                    <input class="form-check-input h-20px w-20px" onclick="taskCheck('.$item->ID_TASK.', 1)" type="checkbox" name="" value="1" />
                                    '.$status.'
                                    <span class="fw-bold ps-4">'.$item->NAMA_TASK.'</span>
                                </label>
                                '.$taskTagHtml.'
                                '.$date.'
                            </div>
                        </div>
                    </div>		
                ';
            }
        }else{
            $html .= '
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <div class="menu-link" style="text-align: center;">
                            <svg width="24pt" height="24pt" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <g transform="translate(0 512) scale(.1 -.1)">
                                <path fill="#A1A5B7" d="m2495 4466c-41-18-83-69-90-109-4-18-5-118-3-224 3-210 5-218 72-267 39-29 133-29 172 0 68 51 69 53 69 294 0 205-1 220-21 246-11 15-32 37-46 47-33 25-113 32-153 13z"/>
                                <path fill="#A1A5B7" d="m1416 3977c-71-39-100-127-68-203 13-31 264-263 314-290 59-33 155-6 195 55 27 40 31 117 9 160-21 40-270 270-311 287-49 20-94 17-139-9z"/>
                                <path fill="#A1A5B7" d="m3550 3979c-50-31-279-247-296-280-23-45-18-119 10-160 44-65 136-88 203-51 46 25 281 238 304 275 81 133-87 297-221 216z"/>
                                <path fill="#A1A5B7" d="m415 2866c-41-18-83-69-90-109-3-18-4-478-3-1024 3-984 3-992 24-1019 11-15 33-37 48-48l27-21h2139 2139l27 21c15 11 37 33 48 48 21 27 21 33 21 1046s0 1019-21 1046c-11 15-33 37-48 48-27 20-39 21-406 21s-379-1-406-21c-15-11-37-33-48-48-21-27-21-39-24-642l-2-614h-1280-1280l-2 614c-3 603-3 615-24 642-11 15-33 37-48 48-26 20-41 21-394 23-290 2-373 0-397-11zm545-906c0-666-2-645 66-696l37-29h1497 1497l37 29c68 51 66 30 66 696v600h160 160v-800-800h-1920-1920v800 800h160 160v-600z"/>
                                </g>
                            </svg>
                            <span class="ps-3 pt-2 text-gray-500 fw-bold">Empty</span>
                        </div>
                    </div>
                </div>
            ';
        }
        return $html;
    }

    public function getUndates($email){
        $undates    = $this->Task->getUndate(['EMAIL_USER' => $email]);
        $html       = '';

        if($undates != null){
            foreach ($undates as $item) {
                $status = "";
                if($item->PRIORITAS_TASK){
                    $status = '
                        <span class="ps-4 '.$item->COLOR_MP.'" style="font-weight: 700;" data-bs-toggle="tooltip" data-bs-placement="top" title="'.$item->NAMA_MP.'">'.$item->ALIAS_MP.'&nbsp;</span>
                    ';
                }

                $taskTag 	 = $this->General->get('v_task_tag', ['ID_TASK' => $item->ID_TASK]);
                $taskTagHtml = "";
                foreach ($taskTag as $item2) {
                    $taskTagHtml .= '<span class="badge '.$item2->BADGE_MC.'"><i class="bi bi-tag-fill text-'.$item2->COLOR_MC.'"></i> '.$item2->NAMA_TAG.'</span>&nbsp;';
                }

                $html .= '
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <div class="menu-link">
                            <a class="mdlEdit" onclick="mdlEditOnClick('.$item->ID_TASK.')" data-bs-toggle="modal" data-bs-target="#mdlEditTask"><i class="bi bi-three-dots-vertical"></i></a>
                            <label class="ps-lg-3 form-check form-check-custom form-check-solid me-10">
                                <input class="form-check-input h-20px w-20px" onclick="taskCheck('.$item->ID_TASK.', 1)" type="checkbox" name="" value="today1" />
                                '.$status.'
                                <span class="fw-bold ps-4">'.$item->NAMA_TASK.'</span>
                            </label>
                            '.$taskTagHtml.'
                        </div>
                    </div>
                </div>		
                ';
            }
        }else{
            $html .= '
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <div class="menu-link" style="text-align: center;">
                            <svg width="24pt" height="24pt" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <g transform="translate(0 512) scale(.1 -.1)">
                                <path fill="#A1A5B7" d="m2495 4466c-41-18-83-69-90-109-4-18-5-118-3-224 3-210 5-218 72-267 39-29 133-29 172 0 68 51 69 53 69 294 0 205-1 220-21 246-11 15-32 37-46 47-33 25-113 32-153 13z"/>
                                <path fill="#A1A5B7" d="m1416 3977c-71-39-100-127-68-203 13-31 264-263 314-290 59-33 155-6 195 55 27 40 31 117 9 160-21 40-270 270-311 287-49 20-94 17-139-9z"/>
                                <path fill="#A1A5B7" d="m3550 3979c-50-31-279-247-296-280-23-45-18-119 10-160 44-65 136-88 203-51 46 25 281 238 304 275 81 133-87 297-221 216z"/>
                                <path fill="#A1A5B7" d="m415 2866c-41-18-83-69-90-109-3-18-4-478-3-1024 3-984 3-992 24-1019 11-15 33-37 48-48l27-21h2139 2139l27 21c15 11 37 33 48 48 21 27 21 33 21 1046s0 1019-21 1046c-11 15-33 37-48 48-27 20-39 21-406 21s-379-1-406-21c-15-11-37-33-48-48-21-27-21-39-24-642l-2-614h-1280-1280l-2 614c-3 603-3 615-24 642-11 15-33 37-48 48-26 20-41 21-394 23-290 2-373 0-397-11zm545-906c0-666-2-645 66-696l37-29h1497 1497l37 29c68 51 66 30 66 696v600h160 160v-800-800h-1920-1920v800 800h160 160v-600z"/>
                                </g>
                            </svg>
                            <span class="ps-3 pt-2 text-gray-500 fw-bold">Empty</span>
                        </div>
                    </div>
                </div>
            ';
        }
        return $html;
    }
    public function getCompleteds($email){
        $completeds = $this->Task->get(['EMAIL_USER' => $email, 'ISFINISHED_TASK' => "1", "orderBy" => "TGL_TASK DESC"]);
        $html       = '';
        if($completeds != null){
            foreach ($completeds as $item) {
                $status = "";
                if($item->PRIORITAS_TASK){
                    $status = '
                        <span class="ps-4" data-bs-toggle="tooltip" data-bs-placement="top" title="'.$item->NAMA_MP.'">'.$item->ALIAS_MP.'&nbsp;</span>
                    ';
                }
                
                $taskTag 	 = $this->General->get('v_task_tag', ['ID_TASK' => $item->ID_TASK]);
                $taskTagHtml = "";
                foreach ($taskTag as $item2) {
                    $taskTagHtml .= '<span class="badge badge-light"><i class="bi bi-tag-fill text-secondary"></i> '.$item2->NAMA_TAG.'</span>&nbsp;';
                }

                $html .= '
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <div class="menu-link">
                            <a class="mdlEdit" onclick="mdlEditOnClick('.$item->ID_TASK.')" data-bs-toggle="modal" data-bs-target="#mdlEditTask"><i class="bi bi-three-dots-vertical"></i></a>
                            <label class="ps-lg-3 form-check form-check-custom form-check-solid me-10">
                                <input class="form-check-input h-20px w-20px" onclick="taskCheck('.$item->ID_TASK.', 0)" type="checkbox" name="" value="today1" checked />
                                '.$status.'
                                <span class="fw-bold ps-4" style="text-decoration: line-through;">'.$item->NAMA_TASK.'</span>
                            </label>
                            '.$taskTagHtml.'
                        </div>
                    </div>
                </div>		
                ';
            }
        }else{
            $html .= '
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <div class="menu-link" style="text-align: center;">
                            <svg width="24pt" height="24pt" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <g transform="translate(0 512) scale(.1 -.1)">
                                <path fill="#A1A5B7" d="m2495 4466c-41-18-83-69-90-109-4-18-5-118-3-224 3-210 5-218 72-267 39-29 133-29 172 0 68 51 69 53 69 294 0 205-1 220-21 246-11 15-32 37-46 47-33 25-113 32-153 13z"/>
                                <path fill="#A1A5B7" d="m1416 3977c-71-39-100-127-68-203 13-31 264-263 314-290 59-33 155-6 195 55 27 40 31 117 9 160-21 40-270 270-311 287-49 20-94 17-139-9z"/>
                                <path fill="#A1A5B7" d="m3550 3979c-50-31-279-247-296-280-23-45-18-119 10-160 44-65 136-88 203-51 46 25 281 238 304 275 81 133-87 297-221 216z"/>
                                <path fill="#A1A5B7" d="m415 2866c-41-18-83-69-90-109-3-18-4-478-3-1024 3-984 3-992 24-1019 11-15 33-37 48-48l27-21h2139 2139l27 21c15 11 37 33 48 48 21 27 21 33 21 1046s0 1019-21 1046c-11 15-33 37-48 48-27 20-39 21-406 21s-379-1-406-21c-15-11-37-33-48-48-21-27-21-39-24-642l-2-614h-1280-1280l-2 614c-3 603-3 615-24 642-11 15-33 37-48 48-26 20-41 21-394 23-290 2-373 0-397-11zm545-906c0-666-2-645 66-696l37-29h1497 1497l37 29c68 51 66 30 66 696v600h160 160v-800-800h-1920-1920v800 800h160 160v-600z"/>
                                </g>
                            </svg>
                            <span class="ps-3 pt-2 text-gray-500 fw-bold">Empty</span>
                        </div>
                    </div>
                </div>
            ';
        }
        return $html;
    }
}