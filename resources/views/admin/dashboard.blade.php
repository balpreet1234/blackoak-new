@extends('layouts.admin.app')
@section('content')  

       
       <!--start content-->
          <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Dashboards</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">CMS Dashboard</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Settings</button>
                  <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <!--end breadcrumb-->

            
            <div class="row">
              <div class="col-12 col-lg-12 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                  <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-3 row-cols-xxl-3 g-3">
                      <div class="col">
                        <div class="card radius-10 bg-tiffany mb-0">
                          <div class="card-body text-center">
                            <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                              <i class="bi bi-file-earmark-break-fill"></i>
                            </div>
                             <h3 class="text-white">25</h3>
                             <p class="mb-0 text-white">Pages</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card radius-10 bg-danger mb-0">
                          <div class="card-body text-center">
                            <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                              <i class="bi bi-hdd-fill"></i>
                            </div>
                            <h3 class="text-white">35</h3>
                             <p class="mb-0 text-white">Posts</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card radius-10 bg-success mb-0">
                          <div class="card-body text-center">
                            <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                              <i class="bi bi-people-fill"></i>
                            </div>
                            <h3 class="text-white">16</h3>
                             <p class="mb-0 text-white">Users</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card radius-10 bg-dark mb-0">
                          <div class="card-body text-center">
                            <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                              <i class="bi bi-file-earmark-check-fill"></i>
                            </div>
                            <h3 class="text-white">18</h3>
                             <p class="mb-0 text-white">Files</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card radius-10 bg-purple mb-0">
                          <div class="card-body text-center">
                            <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                              <i class="bi bi-tags-fill"></i>
                            </div>
                            <h3 class="text-white">22</h3>
                             <p class="mb-0 text-white">Categories</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card radius-10 bg-orange mb-0">
                          <div class="card-body text-center">
                            <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                              <i class="bi bi-chat-left-quote-fill"></i>
                            </div>
                             <h3 class="text-white">45</h3>
                             <p class="mb-0 text-white">Comments</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-12 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                  <div class="card-header bg-transparent">
                    <div class="row g-3 align-items-center">
                      <div class="col">
                        <h5 class="mb-0">Statistics</h5>
                      </div>
                      <div class="col">
                        <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                          <div class="dropdown">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="javascript:;">Action</a>
                              </li>
                              <li><a class="dropdown-item" href="javascript:;">Another action</a>
                              </li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                     </div>
                  </div>
                  <div class="card-body">
                    <div class="d-lg-flex align-items-center justify-content-center gap-4">
                      <div id="chart3"></div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-circle-fill text-primary me-1"></i> Visitors: <span class="me-1">89</span></li>
                        <li class="list-group-item"><i class="bi bi-circle-fill text-danger me-1"></i> Subscribers: <span class="me-1">45</span></li>
                        <li class="list-group-item"><i class="bi bi-circle-fill text-success me-1"></i> Contributor: <span class="me-1">35</span></li>
                        <li class="list-group-item"><i class="bi bi-circle-fill text-orange me-1"></i> Author: <span class="me-1">62</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--end row-->


          </main>
       <!--end page main-->


 @endsection