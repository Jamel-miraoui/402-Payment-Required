import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { About1Component } from './about1/about1.component';
import { ContactComponent } from './contact/contact.component';
import { HomeComponent } from './home.component';
import { LoginComponent } from './login/login.component';

const routes: Routes = [

];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class HomeRoutingModule { }
