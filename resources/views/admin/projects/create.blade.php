@extends('admin.master')

@section('content')
        <!-- Hero -->
        <div class="bg-image" style="background-image: url('admin/assets/media/photos/photo13@2x.jpg');">
          <div class="bg-black-50">
            <div class="content content-full">
              <h1 class="fs-2 text-white my-2">
                <i class="fa fa-plus text-white-50 me-1"></i> New project
              </h1>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          <div class="block block-rounded block-bordered">
            <div class="block-content">
              <form action="be_pages_projects_create.html" method="POST">
                <!-- Vital Info -->
                <h2 class="content-heading pt-0">Vital Info</h2>
                <div class="row push">
                  <div class="col-lg-4">
                    <p class="text-muted">
                      Some vital information about your new project
                    </p>
                  </div>
                  <div class="col-lg-8 col-xl-5">
                    <div class="mb-4">
                      <label class="form-label" for="dm-project-new-name">
                        Name <span class="text-danger">*</span>
                      </label>
                      <input type="text" class="form-control" id="dm-project-new-name" name="dm-project-new-name" placeholder="eg: example.com">
                    </div>
                    <div class="row mb-4">
                      <div class="col-lg-8">
                        <label class="form-label" for="dm-project-new-category">
                          Category <span class="text-danger">*</span>
                        </label>
                        <select class="form-select" id="dm-project-new-category" name="dm-project-new-category">
                          <option value="0">Select a category</option>
                          <option value="design-web">Web Design</option>
                          <option value="design-logo">Logo Design</option>
                          <option value="design-ux-ui">UX/UI Design</option>
                          <option value="dev-web">Web Development</option>
                          <option value="dev-app">App Development</option>
                          <option value="dev-mobile">Mobile Development</option>
                          <option value="identity">Identity</option>
                          <option value="marketing">Marketing</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END Vital Info -->

                <!-- Optional Info -->
                <h2 class="content-heading pt-0">Optional Info</h2>
                <div class="row push">
                  <div class="col-lg-4">
                    <p class="text-muted">
                      You can add more details if you like but it is not required
                    </p>
                  </div>
                  <div class="col-lg-8 col-xl-5">
                    <div class="mb-4">
                      <label class="form-label" for="dm-project-new-description">Description</label>
                      <textarea class="form-control" id="dm-project-new-description" name="dm-project-new-description" rows="6" placeholder="What is this project about?"></textarea>
                    </div>
                    <div class="row mb-4">
                      <div class="col-md-6">
                        <!-- Bootstrap Datepicker (.js-datepicker class are initialized in Helpers.jqDatepicker()) -->
                        <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
                        <label class="form-label" for="dm-project-new-deadline">Deadline</label>
                        <input type="text" class="js-datepicker form-control" id="dm-project-new-deadline" name="dm-project-new-deadline" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                      </div>
                    </div>
                    <div class="row mb-4">
                      <div class="col-md-6">
                        <label class="form-label" for="dm-project-new-color">Color</label>
                        <input type="text" class="form-control" id="dm-project-new-color" name="dm-project-new-color" placeholder="#0665d0">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END Optional Info -->

                <!-- People -->
                <h2 class="content-heading pt-0">People</h2>
                <div class="row push">
                  <div class="col-lg-4">
                    <p class="text-muted">
                      Assign people to this project (you can edit them later)
                    </p>
                  </div>
                  <div class="col-lg-8">
                    <div class="row items-push">
                      <div class="col-md-6 col-xl-4">
                        <div class="form-check form-block">
                          <input type="checkbox" class="form-check-input" id="dm-project-new-people-1" name="dm-project-new-people-1">
                          <label class="form-check-label" for="dm-project-new-people-1">
                            <span class="d-flex align-items-center">
                              <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                              <span class="ms-2">
                                <span class="fw-bold">Danielle Jones</span>
                                <span class="d-block fs-sm text-muted">Web Designer</span>
                              </span>
                            </span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <div class="form-check form-block">
                          <input type="checkbox" class="form-check-input" id="dm-project-new-people-2" name="dm-project-new-people-2">
                          <label class="form-check-label" for="dm-project-new-people-2">
                            <span class="d-flex align-items-center">
                              <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar9.jpg" alt="">
                              <span class="ms-2">
                                <span class="fw-bold">Ralph Murray</span>
                                <span class="d-block fs-sm text-muted">Web Developer</span>
                              </span>
                            </span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <div class="form-check form-block">
                          <input type="checkbox" class="form-check-input" id="dm-project-new-people-3" name="dm-project-new-people-3">
                          <label class="form-check-label" for="dm-project-new-people-3">
                            <span class="d-flex align-items-center">
                              <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                              <span class="ms-2">
                                <span class="fw-bold">Jose Mills</span>
                                <span class="d-block fs-sm text-muted">Graphic Designer</span>
                              </span>
                            </span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <div class="form-check form-block">
                          <input type="checkbox" class="form-check-input" id="dm-project-new-people-4" name="dm-project-new-people-4">
                          <label class="form-check-label" for="dm-project-new-people-4">
                            <span class="d-flex align-items-center">
                              <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar4.jpg" alt="">
                              <span class="ms-2">
                                <span class="fw-bold">Lisa Jenkins</span>
                                <span class="d-block fs-sm text-muted">Developer</span>
                              </span>
                            </span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <div class="form-check form-block">
                          <input type="checkbox" class="form-check-input" id="dm-project-new-people-5" name="dm-project-new-people-5">
                          <label class="form-check-label" for="dm-project-new-people-5">
                            <span class="d-flex align-items-center">
                              <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                              <span class="ms-2">
                                <span class="fw-bold">Megan Fuller</span>
                                <span class="d-block fs-sm text-muted">Marketing</span>
                              </span>
                            </span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <div class="form-check form-block">
                          <input type="checkbox" class="form-check-input" id="dm-project-new-people-6" name="dm-project-new-people-6">
                          <label class="form-check-label" for="dm-project-new-people-6">
                            <span class="d-flex align-items-center">
                              <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar11.jpg" alt="">
                              <span class="ms-2">
                                <span class="fw-bold">Wayne Garcia</span>
                                <span class="d-block fs-sm text-muted">Designer</span>
                              </span>
                            </span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <div class="form-check form-block">
                          <input type="checkbox" class="form-check-input" id="dm-project-new-people-7" name="dm-project-new-people-7">
                          <label class="form-check-label" for="dm-project-new-people-7">
                            <span class="d-flex align-items-center">
                              <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar15.jpg" alt="">
                              <span class="ms-2">
                                <span class="fw-bold">Jack Greene</span>
                                <span class="d-block fs-sm text-muted">Marketing</span>
                              </span>
                            </span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <div class="form-check form-block">
                          <input type="checkbox" class="form-check-input" id="dm-project-new-people-8" name="dm-project-new-people-8">
                          <label class="form-check-label" for="dm-project-new-people-8">
                            <span class="d-flex align-items-center">
                              <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar14.jpg" alt="">
                              <span class="ms-2">
                                <span class="fw-bold">Jeffrey Shaw</span>
                                <span class="d-block fs-sm text-muted">Mobile Developer</span>
                              </span>
                            </span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <div class="form-check form-block">
                          <input type="checkbox" class="form-check-input" id="dm-project-new-people-9" name="dm-project-new-people-9">
                          <label class="form-check-label" for="dm-project-new-people-9">
                            <span class="d-flex align-items-center">
                              <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                              <span class="ms-2">
                                <span class="fw-bold">Lisa Jenkins</span>
                                <span class="d-block fs-sm text-muted">Lawyer</span>
                              </span>
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END People -->

                <!-- Submit -->
                <div class="row push">
                  <div class="col-lg-8 col-xl-5 offset-lg-4">
                    <div class="mb-4">
                      <button type="submit" class="btn btn-alt-primary">
                        <i class="fa fa-check-circle me-1 opacity-50"></i> Create Project
                      </button>
                    </div>
                  </div>
                </div>
                <!-- END Submit -->
              </form>
            </div>
          </div>
        </div>
        <!-- END Page Content -->
@endsection
