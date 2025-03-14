<?php echo $this->extend('layouts/default') ?>
        
<?php echo $this->section('content') ?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Email</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo !empty($page_title) ? $page_title : ''; ?></a></li>
            </ol>
        </div>
        
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="email-left-box mb-md-5 mb-4">
                                    <div class="p-0">
                                        <a href="<?php echo site_url('email_compose'); ?>" class="btn btn-primary btn-block">Compose</a>
                                    </div>
                                    <div class="mail-list rounded mt-4">
                                        <a href="<?php echo site_url('email_inbox'); ?>" class="list-group-item active">
                                            <i class="fa fa-inbox font-18 align-middle me-2"></i> Inbox 
                                            <span class="badge badge-primary badge-sm float-end">198</span>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <i class="fa fa-paper-plane font-18 align-middle me-2"></i> Sent
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <i class="fa fa-star font-18 align-middle me-2"></i>Important
                                            <span class="badge badge-circle badge-danger badge-sm text-white float-end">7</span>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <i class="mdi mdi-file-document-box font-18 align-middle me-2"></i>Draft
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <i class="fa fa-trash font-18 align-middle me-2"></i>Trash
                                        </a>
                                    </div>
                                    <div class="mail-list rounded overflow-hidden mt-4">
                                        <div class="intro-title d-flex my-0 justify-content-between">
                                            <h5>Categories</h5>
                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        </div>
                                        <a href="<?php echo site_url('email_inbox'); ?>" class="list-group-item">
                                            <span class="icon-warning">
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                            </span>
                                            Work
                                        </a>
                                        <a href="<?php echo site_url('email_inbox'); ?>" class="list-group-item">
                                            <span class="icon-primary">
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                            </span>
                                            Private
                                        </a>
                                        <a href="<?php echo site_url('email_inbox'); ?>" class="list-group-item">
                                            <span class="icon-success">
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                            </span>
                                            Support
                                        </a>
                                        <a href="<?php echo site_url('email_inbox'); ?>" class="list-group-item">
                                            <span class="icon-dpink">
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                            </span>
                                            Social
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-8">
                                <div class="email-right-box">
                                    <div class="toolbar mb-4" role="toolbar">
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light px-3"><i class="fa fa-archive"></i></button>
                                            <button type="button" class="btn btn-primary light px-3"><i class="fa fa-exclamation-circle"></i></button>
                                            <button type="button" class="btn btn-primary light px-3"><i class="fa fa-trash"></i></button>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light dropdown-toggle px-3" data-bs-toggle="dropdown">
                                                <i class="fa fa-folder"></i> <b class="caret m-l-5"></b>
                                            </button>
                                            <div class="dropdown-menu"> 
                                                <a class="dropdown-item" href="javascript: void(0);">Social</a> 
                                                <a class="dropdown-item" href="javascript: void(0);">Promotions</a> 
                                                <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light dropdown-toggle px-3" data-bs-toggle="dropdown">
                                                <i class="fa fa-tag"></i> <b class="caret m-l-5"></b>
                                            </button>
                                            <div class="dropdown-menu"> 
                                                <a class="dropdown-item" href="javascript: void(0);">Updates</a> 
                                                <a class="dropdown-item" href="javascript: void(0);">Social</a> 
                                                <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light dropdown-toggle v" data-bs-toggle="dropdown">More <span class="caret m-l-5"></span>
                                            </button>
                                            <div class="dropdown-menu"> <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a> <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Add Star</a> <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="compose-content">
                                        <form action="#">
                                            <div class="mb-3">
                                                <input type="text" class="form-control bg-transparent" placeholder=" To:">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control bg-transparent" placeholder=" Subject:">
                                            </div>
                                            <div class="mb-3">
                                                <textarea id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="8" placeholder="Enter text ..."></textarea>
                                            </div>
                                        </form>
                                        <h5 class="mb-4"><i class="fa fa-paperclip me-2"></i> Attatchment</h5>
                                        <form action="#" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form>
                                    </div>
                                    <div class="text-start mt-4 mb-3">
                                        <button class="btn btn-primary btn-sl-sm me-2" type="button"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Send</button>
                                        <button class="btn btn-danger light btn-sl-sm" type="button"><span class="me-2"><i class="fa fa-times"></i></span>Discard</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--**********************************
    Content body end
***********************************-->
<?php echo $this->endSection() ?>