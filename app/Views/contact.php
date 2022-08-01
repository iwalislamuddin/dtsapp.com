<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="card mb-3" style="max-width:600px; margin:auto;">
    <div class="card-header">
        <h6>Contact</h6>
    </div>
    <div class="card-body">


        <div class="container">
            <form id="contact-form" role="form">
                <div class="controls">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"> <label for="form_name">Name *</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your name *" required="required" data-error="Firstname is required."> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required."> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> <label for="form_need">Please specify your need *</label> <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                    <option value="" selected disabled>--Select Your Issue--</option>
                                    <option>Application Bug</option>
                                    <option>Calculation Verification</option>
                                    <option>Suggestion</option>
                                    <option>Testimonial</option>
                                    <option>Other</option>
                                </select> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"> <label for="form_message">Message *</label> <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                        </div>
                        <div class="col-md-12"> <input type="submit" class="btn btn-accent btn-send pt-2 btn-block " value="Send Message"> </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>