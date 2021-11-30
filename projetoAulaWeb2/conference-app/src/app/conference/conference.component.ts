import { Component, OnInit } from '@angular/core';
import { conference } from '../conference';

@Component({
  selector: 'app-conference',
  templateUrl: './conference.component.html',
  styleUrls: ['./conference.component.css']
})
export class ConferenceComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

  conferencia2:conference={
    name: "Criação de componentes",
    data: new Date("2021-11-29"),
    local: "Estga"
  }

}
