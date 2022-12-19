import { Component, OnInit,} from '@angular/core';
import { Produit } from 'src/app/shared/models/produit';
import { CATALOGUE } from '../../../shared/mock-data/catalogue-produits' ;


@Component({
  selector: 'app-home-products',
  templateUrl: './home-products.component.html',
  styleUrls: ['./home-products.component.css']
})

export class HomeProductsComponent implements OnInit {

  title = "PRODUITS";
  produits = CATALOGUE;

  constructor() { }

  ngOnInit(): void {
  }

  onDetail(p:Produit){
    alert(p.description)
  }

  ch= this.produits[0];

}



















