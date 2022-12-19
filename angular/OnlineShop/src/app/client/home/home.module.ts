import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { HomeRoutingModule } from './home-routing.module';
import { HomeComponent } from './home.component';
import { HomeBannerComponent } from './home-banner/home-banner.component';
import { HomeProductDetailComponent } from './home-product-detail/home-product-detail.component';
import { HomeProductsComponent } from './home-products/home-products.component';
import { FooterComponent } from './footer/footer.component';
import { About1Component } from './about1/about1.component';
import { LoginComponent } from './login/login.component';
import { ContactComponent } from './contact/contact.component';




@NgModule({
  declarations: [
    HomeComponent,
    HomeBannerComponent,
    HomeProductDetailComponent,
    HomeProductsComponent,
    FooterComponent,
    About1Component,
    LoginComponent,
    ContactComponent,
  ],
  imports: [
    CommonModule,
    HomeRoutingModule
  ],
  exports: [
    HomeComponent
  ]
})
export class HomeModule { }
