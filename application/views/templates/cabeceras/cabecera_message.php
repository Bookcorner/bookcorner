<div class="container">
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="message-container">
        <?php if($this->session->flashdata('signInError')) { ?> <div class="alert alert-danger text-center" role="alert"> <?= $this->session->flashdata('signInError') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('signUpSuccess')) { ?> <div class="alert alert-success text-center" role="alert"> <?= $this->session->flashdata('signUpSuccess') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('signUpFail')) { ?> <div class="alert alert-danger text-center" role="alert"> <?= $this->session->flashdata('signUpFail') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('ok')) { ?> <div class="alert alert-info text-center" role="alert"> <?= $this->session->flashdata('ok') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('bookAddedSuccess')) { ?> <div class="alert alert-success text-center" role="alert"> <?= $this->session->flashdata('bookAddedSuccess') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('bookAlreadyAdded')) { ?> <div class="alert alert-warning text-center" role="alert"> <?= $this->session->flashdata('bookAlreadyAdded') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('bookNotAdded')) { ?> <div class="alert alert-warning text-center" role="alert"> <?= $this->session->flashdata('bookNotAdded') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('bookRemovedSuccess')) { ?> <div class="alert alert-success text-center" role="alert"> <?= $this->session->flashdata('bookRemovedSuccess') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('updateUsernameError')) { ?> <div class="alert alert-danger text-center" role="alert"> <?= $this->session->flashdata('updateUsernameError') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('updateUsernameOk')) { ?> <div class="alert alert-success text-center" role="alert"> <?= $this->session->flashdata('updateUsernameOk') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('updateEmailError')) { ?> <div class="alert alert-danger text-center" role="alert"> <?= $this->session->flashdata('updateEmailError') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('updateEmailOk')) { ?> <div class="alert alert-success text-center" role="alert"> <?= $this->session->flashdata('updateEmailOk') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('updatePassError')) { ?> <div class="alert alert-danger text-center" role="alert"> <?= $this->session->flashdata('updatePassError') ?> </div> <?php } ?>        
        <?php if($this->session->flashdata('updateAvatarError')) { ?> <div class="alert alert-danger text-center" role="alert"> <?= $this->session->flashdata('updateAvatarError') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('updateAvatarOk')) { ?> <div class="alert alert-success text-center" role="alert"> <?= $this->session->flashdata('updateAvatarOk') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('updatePassOk')) { ?> <div class="alert alert-success text-center" role="alert"> <?= $this->session->flashdata('updatePassOk') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('sendmailerror')) { ?> <div class="alert alert-info text-center" role="alert"> <?= $this->session->flashdata('sendmailerror') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('bookCreatedSuccess')) { ?> <div class="alert alert-success text-center" role="alert"> <?= $this->session->flashdata('bookCreatedSuccess') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('bookImageError')) { ?> <div class="alert alert-danger text-center" role="alert"> <?= $this->session->flashdata('bookImageError') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('authorImageError')) { ?> <div class="alert alert-danger text-center" role="alert"> <?= $this->session->flashdata('authorImageError') ?> </div> <?php } ?>
        <?php if($this->session->flashdata('verifySuccess')) { ?> <div class="alert alert-success text-center" role="alert"> <?= $this->session->flashdata('verifySuccess') ?> </div> <?php } ?>
    </div>
</div>
</div>