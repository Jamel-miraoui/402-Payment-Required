import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ClientModule } from './client/client.module';
import { AdminModule } from './admin/admin.module';
import { PageNoteFoundComponent } from './page-note-found.component';
import { HomeBannerComponent } from './client/home/home-banner/home-banner.component';

@NgModule({
  declarations: [
    AppComponent,
    PageNoteFoundComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    ClientModule,
    AdminModule
  ],
  providers: [],
  bootstrap: [AppComponent],
  exports: [
    PageNoteFoundComponent
  ]
})
export class AppModule { }
export class test { }
