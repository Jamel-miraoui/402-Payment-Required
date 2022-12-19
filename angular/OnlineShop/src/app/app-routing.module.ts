import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AdminComponent } from './admin/admin.component';
import { ClientComponent } from './client/client.component';
import { PageNoteFoundComponent } from './page-note-found.component';
import { HomeComponent } from './client/home/home.component';
import { About1Component } from './client/home/about1/about1.component';
import { LoginComponent } from './client/home/login/login.component';
import { ContactComponent } from './client/home/contact/contact.component';

const routes: Routes = [
  {path: '', redirectTo: '/index', pathMatch: 'full' },
  {path :'home', component : HomeComponent},
  {path :'about', component : About1Component},
  {path :'login', component :LoginComponent},
  {path :'contact', component :ContactComponent},
  {path : 'admin', component : AdminComponent},
  {path :'index', component : ClientComponent},
  {path :'**', component : PageNoteFoundComponent}
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { };