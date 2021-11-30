import { Component } from '@angular/core';
import { conference } from './conference';
import { Conferences } from './conferencesList';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})

export class AppComponent {
  title = 'ConferenceHub';
  conferencias = Conferences;

  selectedConf?: conference;

  conferencia: conference = {
    name: "Monitorização de Dados",
    data: new Date("2021-11-29"),
    local: "Estga"
  }

  onSelect(conf : conference): void{
    this.selectedConf = conf;
  }



}
