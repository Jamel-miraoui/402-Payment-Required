import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { GestprodRoutingModule } from './gestprod-routing.module';
import { GestprodComponent } from './gestprod.component';


@NgModule({
  declarations: [
    GestprodComponent
  ],
  imports: [
    CommonModule,
    GestprodRoutingModule
  ],
  exports: [
    GestprodComponent
  ]
})
export class GestprodModule { }
