import OverflowStyle from "../Style/Overflow.js";
import DisplayStyle from "../Style/Display.js";

// HtmlContainer
export default class BaseContainer {

    _htmlElement = null;

    _namespace;

    _displayTmp = DisplayStyle.BLOCK;  // = DisplayStyle.NONE;

    constructor(tagName, parentContainer, namespace = "http://www.w3.org/1999/xhtml") {

        this._namespace = namespace;

        if (parentContainer == null) {

            this._htmlElement = document.createElementNS(namespace, tagName);

        } else {

            this._htmlElement = document.createElementNS(namespace, tagName);
            parentContainer.addContainer(this);

        }

    }


    fromId(id) {
        this._htmlElement = document.getElementById(id);
        return this;
    }





    render() {

    }

    set id(value) {
        this._htmlElement.id = value;
    }

    get id() {
        return this._htmlElement.id;
    }


    set title(value) {
        this._htmlElement.title = value;
    }


    // onMouseClick
    set onClick(event) {
        this._htmlElement.addEventListener("click", event);
    }


    set onMouseMove(event) {
        this._htmlElement.addEventListener("onmousemove", event);
    }


    set onMouseDown(event) {
        this._htmlElement.addEventListener("mousedown", event);
    }


    set onMouseUp(event) {
        this._htmlElement.addEventListener("mouseup", event);
    }

    set onMouseEnter(event) {
        this._htmlElement.addEventListener("mouseenter", event);
    }

    set onMouseLeave(event) {
        this._htmlElement.addEventListener("mouseleave", event);
    }

    set onMouseOver(event) {
        this._htmlElement.addEventListener("mouseover", event);
    }

    set onKeyUp(event) {
        this._htmlElement.addEventListener("keyup", event);
    }

    set onKeyDown(value) {
        document.addEventListener("keydown", value);
    }

    set onKeyPress(value) {
        document.addEventListener("keypress", value);
    }


    set onScroll(event) {
        this._htmlElement.addEventListener("scroll", event);
    }

    // onScrollEnd
    set onEndScroll(value) {

        let local = this;

        this.onScroll = function () {

            if (this.offsetHeight + this.scrollTop >= this.scrollHeight) {

                value();

            }

        }

    }

    set onTouchStart(event) {
        this._htmlElement.addEventListener("touchstart", event);
    }

    set onTouchMove(event) {
        this._htmlElement.addEventListener("touchmove", event);
    }

    set onTouchEnd(event) {
        this._htmlElement.addEventListener("touchend", event);
    }

    set onDrop(event) {
        this._htmlElement.addEventListener("ondrop", event);
    }

    set onDragOver(event) {
        this._htmlElement.addEventListener("ondragover", event);
    }

    set onDragEnter(event) {
        this._htmlElement.addEventListener("dragenter", event);
    }

    set onDragLeave(event) {
        this._htmlElement.addEventListener("dragleave", event);
    }


    /*set onEnter(event) {
        this._htmlElement.addEventListener("dragenter", event);
    }

    set onLeave(event) {
        this._htmlElement.addEventListener("dragleave", event);
    }*/

    /*
    item.addEventListener('dragstart', handleDragStart, false);
    item.addEventListener('dragover', handleDragOver, false);
    item.addEventListener('dragenter', handleDragEnter, false);
    item.addEventListener('dragleave', handleDragLeave, false);
    item.addEventListener('dragend', handleDragEnd, false);*/


    //ondragover

    //ondrop


    set onChange(event) {
        this._htmlElement.addEventListener("change", event);
    }

    set onInput(event) {
        this._htmlElement.addEventListener("input", event);
    }

    set onFocus(event) {
        this._htmlElement.addEventListener("focus", event);
    }


    // onFocusLost
    // onFocusLeave
    set onFocusOut(event) {
        this._htmlElement.addEventListener("focusout", event);
    }


    set visible(value) {

        if (value) {


            //this._displayTmp = this.display = this._displayTmp;
            this.display = this._displayTmp;  //DisplayStyle.BLOCK;
            //this.display = DisplayStyle.BLOCK;

            //alert(this._displayTmp);

        } else {
            //this._displayTmp = this.display;
            this._htmlElement.style.display = DisplayStyle.NONE;
            //this.display = DisplayStyle.NONE;
        }

    }


    addContainer(container) {

        if (container instanceof BaseContainer) {
            this._htmlElement.appendChild(container._htmlElement);
        }

        return this;

    }


    addAfter(container) {

        this._htmlElement.after(container._htmlElement);
        return this;

    }


    addBefore(container) {

        this._htmlElement.before(container._htmlElement);
        return this;

    }


    addCssClass(cssClass) {

        let _local = this;

        cssClass.split(" ").forEach(function (item) {
            _local._htmlElement.classList.add(item);
        });

        return this;

    }

    removeCssClass(cssClass) {
        this._htmlElement.classList.remove(cssClass);
    }


    // removeAllCssClass
    cleanCssClass() {
        this._htmlElement.className = '';
    }


    removeContainer() {
        this._htmlElement.remove();
    }

    emptyContainer() {
        this._htmlElement.innerHTML = "";
    }


    getAttribute(name) {

        let value = this._htmlElement.getAttribute(name);
        return value;

    }


    addAttribute(name, value) {

        this._htmlElement.setAttribute(name, value);
        return this;

    }

    addAttributeWithoutValue(name) {

        this.addAttribute(name, "");
        return this;

    }


    addDataAttribute(name, value) {

        this.addAttribute("data-" + name, value);
        return this;

    }


    getDataAttribute(name) {

        let value = this.getAttribute("data-" + name);
        return value;

    }


    removeAttribute(name) {

        this._htmlElement.removeAttribute(name);
        return this;

    }

    set dragable(value) {
        this.addAttribute("draggable", "true");
    }

    set position(value) {
        this._htmlElement.style.position = value;
    }

    set top(value) {
        this._htmlElement.style.top = value;
    }

    set topPercent(value) {
        this._htmlElement.style.top = value + "%";
    }

    set topPixel(value) {
        this._htmlElement.style.top = value + "px";
    }

    set bottom(value) {
        this._htmlElement.style.bottom = value;
    }

    set bottomPercent(value) {
        this._htmlElement.style.bottom = value + "%";
    }

    set bottomPixel(value) {
        this._htmlElement.style.bottom = value + "px";
    }

    set left(value) {
        this._left = value;
        this._htmlElement.style.left = value;
    }

    set leftPercent(value) {
        this._left = value;
        this._htmlElement.style.left = value + "%";
    }

    set leftPixel(value) {
        this._left = value;
        this._htmlElement.style.left = value + "px";
    }

    get left() {
        return this._left;
    }

    set rightPixel(value) {
        this._left = value;
        this._htmlElement.style.right = value + "px";
    }

    set right(value) {
        this._htmlElement.style.right = value;
    }

    set height(value) {

        this._htmlElement.style.height = value;
    }

    set heightPercent(value) {
        this.height = value + "%";
        //this._htmlElement.style.height = value + "%";
    }

    set heightPixel(value) {
        this.height = value + "px";
        //this._htmlElement.style.height = value + "px";
    }

    get height() {
        return this._htmlElement.style.height;
    }


    set minHeightPercent(value) {
        this._htmlElement.style.minHeight = value + "%";
    }

    set minHeightPixel(value) {
        this._htmlElement.style.minHeight = value + "px";
    }

    set maxHeightPercent(value) {
        this._htmlElement.style.maxHeight = value + "%";
    }

    set maxHeightPixel(value) {
        this._htmlElement.style.maxHeight = value + "px";
    }

    set width(value) {
        this._htmlElement.style.width = value;
    }

    get width() {
        return this._htmlElement.style.width;
    }

    set widthPercent(value) {
        this._htmlElement.style.width = value + "%";
    }

    set widthPixel(value) {
        this._htmlElement.style.width = value + "px";
    }

    set minWidthPercent(value) {
        this._htmlElement.style.minWidth = value + "%";
    }

    set maxWidthPercent(value) {
        this._htmlElement.style.maxWidth = value + "%";
    }

    set maxWidthPixel(value) {
        this._htmlElement.style.maxWidth = value + "px";
    }

    set minWidthPixel(value) {
        this._htmlElement.style.minWidth = value + "px";
    }

    set boxSizing(value) {
        this._htmlElement.style.boxSizing = value;
    }

    set margin(value) {
        this._htmlElement.style.margin = value;
    }

    set marginLeft(value) {
        this._htmlElement.style.marginLeft = value;
    }

    set marginRight(value) {
        this._htmlElement.style.marginRight = value;
    }

    set marginTopPixel(value) {
        this._htmlElement.style.marginTop = value + "px";
    }

    set marginRightPixel(value) {
        this._htmlElement.style.marginRight = value + "px";
    }

    set marginBottomPixel(value) {
        this._htmlElement.style.marginBottom = value + "px";
    }

    set marginLeftPixel(value) {
        this._htmlElement.style.marginLeft = value + "px";
    }

    set marginPixel(value) {
        this._htmlElement.style.margin = value + "px";
    }

    set padding(value) {
        this._htmlElement.style.padding = value;
    }

    set paddingPixel(value) {
        this._htmlElement.style.padding = value + "px";
    }

    set paddingBottomPixel(value) {
        this._htmlElement.style.paddingBottom = value + "px";
    }

    set zIndex(value) {
        this._htmlElement.style.zIndex = value;
    }

    set backgroundColor(value) {
        this._htmlElement.style.backgroundColor = value;
    }

    set float(value) {
        this._htmlElement.style.float = value;
    }


    get display() {
        return this._htmlElement.style.display;
    }

    set display(value) {
        this._displayTmp = value;
        this._htmlElement.style.display = value;
    }

    set flexDirection(value) {
        this._htmlElement.style.flexDirection = value;
    }

    set flexBasisPixel(value) {
        this._htmlElement.style.flexBasis = value + "px";
    }

    set flexWrap(value) {
        this._htmlElement.style.flexWrap = "wrap";
    }

    set gapPixel(value) {
        this._htmlElement.style.gap = value + "px";
    }

    set justifyContent(value) {
        this._htmlElement.style.justifyContent = value;
    }

    set alignItems(value) {
        this._htmlElement.style.alignItems = value;
    }

    //align-items


    set color(value) {
        this._htmlElement.style.color = value;
    }

    set cursor(value) {
        this._htmlElement.style.cursor = value;
    }

    set textAlignment(value) {
        this._htmlElement.style.textAlign = value;
    }

    set textShadow(value) {
        this._htmlElement.style.textShadow = value;
    }

    set boxShadow(value) {
        this._htmlElement.style.boxShadow = value;
    }

    set visibility(value) {
        this._htmlElement.style.visibility = value;
    }

    set overflow(value) {
        this._htmlElement.style.overflow = value;
    }

    set overflowX(value) {
        this._htmlElement.style.overflowX = value;
    }

    set overflowY(value) {
        this._htmlElement.style.overflowY = value;
    }

    set opacity(value) {
        this._htmlElement.style.opacity = value;
    }

    set fontFamily(value) {
        this._htmlElement.style.fontFamily = value;
    }

    set fontSize(value) {
        this._htmlElement.style.fontSize = value;
    }

    set fontSizePixel(value) {
        this._htmlElement.style.fontSize = value + "px";
    }

    set fontWeight(value) {
        this._htmlElement.style.fontWeight = value;
    }

    set fontColor(value) {
        this._htmlElement.style.fontColor = value;
    }

    set transform(value) {
        this._htmlElement.style.transform = value;
    }

    set pointerEvent(value) {
        this._htmlElement.style.pointerEvents = value;
    }

    set border(value) {
        this._htmlElement.style.border = value;
    }

    set borderStyle(value) {
        this._htmlElement.style.borderStyle = value;
    }

    set borderWidth(value) {
        this._htmlElement.style.borderWidth = value;
    }

    set borderColor(value) {
        this._htmlElement.style.borderColor = value;
    }

    set borderSpacing(value) {
        this._htmlElement.style.borderSpacing = value;
    }

    set borderRadius(value) {
        this._htmlElement.style.borderRadius = value;
    }

    set borderRadiusPixel(value) {
        this._htmlElement.style.borderRadius = value + "px";
    }

    set resizeable(value) {

        //if (value) {
        this._htmlElement.style.resize = "both";
        this.overflow = OverflowStyle.AUTO;
        //}

    }

}
