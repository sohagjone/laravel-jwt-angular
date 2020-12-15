import { Component, OnInit } from '@angular/core';
import { DataService } from '../services/data.service';

@Component({
  selector: 'app-crud',
  templateUrl: './crud.component.html',
  styleUrls: ['./crud.component.css']
})
export class CrudComponent implements OnInit {
  dataArr:any;
  constructor(
    private dataService:DataService
  ){ }

  ngOnInit(){
    this.getCrudData();
  }
  getCrudData()
  {
    this.dataService.getData().subscribe(res=>{
      this.dataArr = res;
    });
  }
}


