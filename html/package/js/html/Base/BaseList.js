import BaseContainer from "./Base.js";

export default class BaseContainerList {

    _htmlElementList = null;

    constructor(className) {

        this._htmlElementList = document.getElementsByClassName(className);

    }


    getItem(number) {

        let base = new BaseContainer();
        base._htmlElement=this._htmlElementList[number];
        return base;

    }

    getItemCount() {

        return this._htmlElementList.length;

    }



    set onClick(event) {

        //event.preventDefault();

        for (let i = 0; i < this._htmlElementList.length; i++) {
            this._htmlElementList[i].addEventListener('click', event, false);
        }

    }


    set onChange(event) {

        for (let i = 0; i < this._htmlElementList.length; i++) {
            this._htmlElementList[i].addEventListener('change', event, false);
        }
    }


    set display(value) {

        for (let i = 0; i < this._htmlElementList.length; i++) {
            this._htmlElementList[i].style.display = value;
        }

    }


    set toggle(value) {

        for (let i = 0; i < this._htmlElementList.length; i++) {
            this._htmlElementList[i].classList.toggle(value);  //style.display = value;
        }

        //document.getElementById("myDropdown").classList.toggle("show");

    }




/*
    getData(name) {

        let value = this._htmlElementList[0].getAttribute("data-" + name);
        return value;

    }*/


}