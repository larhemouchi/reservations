@extends('back.layouts.app')



@section('styles')



@endsection

@section('content')



@component('back.components.plain')

  @slot('titlePlain')

Dashboard index
  @endslot


  @slot('sectionPlain')

@forelse( $shows as $show )
<div class="col-sm-12 col-md-6">
                <div class="box box-solid">
                    <div class="box-body">
                        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                            {{ $show->title }}
                        </h4>
                        <div class="media">
                            <div class="media-left">
                                <a href="https://www.creative-tim.com/product/material-dashboard-pro-angular2?affiliate_id=97705" class="ad-click-event">
                                    <img src="/uploads/images/free_templates/creative-tim-material-angular.png" alt="Material Dashboard Pro" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="clearfix">
                                    <p class="pull-right">
                                        <a href="{{ route('reservations.conf', $show->id) }}" class="btn btn-success btn-sm ad-click-event">
                                            Reservations
                                        </a>
                                    </p>

                                    <h4 style="margin-top: 0">Material Dashboard Pro ─ $59</h4>

                                    <p>Angular 2 Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design</p>
                                    <p style="margin-bottom: 0">
                                        <i class="fa fa-shopping-cart margin-r5"></i> 853+ purchases
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@empty


			<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Il n y a pas de shows maintenant revenez plus tard !!!!!! 
              </div>

@endforelse







  @endslot


  @slot('footerPlain')



  @endslot


@endcomponent


@endsection

@section('datatableScript')


@endsection