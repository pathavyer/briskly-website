/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/app/themes/briskly/dist/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/script.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/embla-carousel/embla-carousel.esm.js":
/*!***********************************************************!*\
  !*** ./node_modules/embla-carousel/embla-carousel.esm.js ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function Alignment(align, viewSize) {
  var predefined = {
    start: start,
    center: center,
    end: end
  };

  function start() {
    return 0;
  }

  function center(n) {
    return end(n) / 2;
  }

  function end(n) {
    return viewSize - n;
  }

  function percent() {
    return viewSize * Number(align);
  }

  function measure(n) {
    if (typeof align === 'number') return percent();
    return predefined[align](n);
  }

  var self = {
    measure: measure
  };
  return self;
}

function Animation(callback) {
  var animationFrame = 0;

  function ifAnimating(active, cb) {
    return function () {
      if (active === !!animationFrame) cb();
    };
  }

  function start() {
    animationFrame = window.requestAnimationFrame(callback);
  }

  function stop() {
    window.cancelAnimationFrame(animationFrame);
    animationFrame = 0;
  }

  var self = {
    proceed: ifAnimating(true, start),
    start: ifAnimating(false, start),
    stop: ifAnimating(true, stop)
  };
  return self;
}

function Axis(axis, contentDirection) {
  var scroll = axis === 'y' ? 'y' : 'x';
  var cross = axis === 'y' ? 'x' : 'y';
  var startEdge = getStartEdge();
  var endEdge = getEndEdge();

  function measureSize(rect) {
    var width = rect.width,
        height = rect.height;
    return scroll === 'x' ? width : height;
  }

  function getStartEdge() {
    if (scroll === 'y') return 'top';
    return contentDirection === 'rtl' ? 'right' : 'left';
  }

  function getEndEdge() {
    if (scroll === 'y') return 'bottom';
    return contentDirection === 'rtl' ? 'left' : 'right';
  }

  var self = {
    scroll: scroll,
    cross: cross,
    startEdge: startEdge,
    endEdge: endEdge,
    measureSize: measureSize
  };
  return self;
}

function Limit(min, max) {
  var length = Math.abs(min - max);

  function reachedMin(n) {
    return n < min;
  }

  function reachedMax(n) {
    return n > max;
  }

  function reachedAny(n) {
    return reachedMin(n) || reachedMax(n);
  }

  function constrain(n) {
    if (!reachedAny(n)) return n;
    return reachedMin(n) ? min : max;
  }

  function removeOffset(n) {
    if (!length) return n;
    return n - length * Math.ceil((n - max) / length);
  }

  var self = {
    constrain: constrain,
    length: length,
    max: max,
    min: min,
    reachedAny: reachedAny,
    reachedMax: reachedMax,
    reachedMin: reachedMin,
    removeOffset: removeOffset
  };
  return self;
}

function Counter(max, start, loop) {
  var _a = Limit(0, max),
      min = _a.min,
      constrain = _a.constrain;

  var loopEnd = max + 1;
  var counter = withinLimit(start);

  function withinLimit(n) {
    return !loop ? constrain(n) : Math.abs((loopEnd + n) % loopEnd);
  }

  function get() {
    return counter;
  }

  function set(n) {
    counter = withinLimit(n);
    return self;
  }

  function add(n) {
    return set(get() + n);
  }

  function clone() {
    return Counter(max, get(), loop);
  }

  var self = {
    add: add,
    clone: clone,
    get: get,
    set: set,
    min: min,
    max: max
  };
  return self;
}

function Direction(direction) {
  var sign = direction === 'rtl' ? -1 : 1;

  function applyTo(n) {
    return n * sign;
  }

  var self = {
    applyTo: applyTo
  };
  return self;
}

function EventStore() {
  var listeners = [];

  function add(node, type, handler, options) {
    if (options === void 0) {
      options = false;
    }

    node.addEventListener(type, handler, options);
    listeners.push(function () {
      return node.removeEventListener(type, handler, options);
    });
    return self;
  }

  function removeAll() {
    listeners = listeners.filter(function (remove) {
      return remove();
    });
    return self;
  }

  var self = {
    add: add,
    removeAll: removeAll
  };
  return self;
}

function Vector1D(value) {
  var vector = value;

  function get() {
    return vector;
  }

  function set(n) {
    vector = readNumber(n);
    return self;
  }

  function add(n) {
    vector += readNumber(n);
    return self;
  }

  function subtract(n) {
    vector -= readNumber(n);
    return self;
  }

  function multiply(n) {
    vector *= n;
    return self;
  }

  function divide(n) {
    vector /= n;
    return self;
  }

  function normalize() {
    if (vector !== 0) divide(vector);
    return self;
  }

  function readNumber(n) {
    return typeof n === 'number' ? n : n.get();
  }

  var self = {
    add: add,
    divide: divide,
    get: get,
    multiply: multiply,
    normalize: normalize,
    set: set,
    subtract: subtract
  };
  return self;
}

function map(value, iStart, iStop, oStart, oStop) {
  return oStart + (oStop - oStart) * ((value - iStart) / (iStop - iStart));
}

function mathSign(n) {
  return !n ? 0 : n / Math.abs(n);
}

function deltaAbs(valueB, valueA) {
  return Math.abs(valueB - valueA);
}

function factorAbs(valueB, valueA) {
  if (valueB === 0 || valueA === 0) return 0;
  if (Math.abs(valueB) <= Math.abs(valueA)) return 0;
  var diff = deltaAbs(Math.abs(valueB), Math.abs(valueA));
  return Math.abs(diff / valueB);
}

function roundToDecimals(decimalPoints) {
  var pow = Math.pow(10, decimalPoints);
  return function (n) {
    return Math.round(n * pow) / pow;
  };
}

function debounce(callback, time) {
  var timeout = 0;
  return function () {
    window.clearTimeout(timeout);
    timeout = window.setTimeout(callback, time) || 0;
  };
}

function groupArray(array, size) {
  var groups = [];

  for (var i = 0; i < array.length; i += size) {
    groups.push(array.slice(i, i + size));
  }

  return groups;
}

function arrayKeys(array) {
  return Object.keys(array).map(Number);
}

function arrayLast(array) {
  return array[lastIndex(array)];
}

function lastIndex(array) {
  return Math.max(0, array.length - 1);
}

function DragHandler(axis, direction, rootNode, target, dragFree, dragTracker, location, animation, scrollTo, scrollBody, scrollTarget, index, events, loop, skipSnaps) {
  var scrollAxis = axis.scroll,
      crossAxis = axis.cross;
  var focusNodes = ['INPUT', 'SELECT', 'TEXTAREA'];
  var startScroll = Vector1D(0);
  var startCross = Vector1D(0);
  var dragStartPoint = Vector1D(0);
  var activationEvents = EventStore();
  var interactionEvents = EventStore();
  var snapForceBoost = {
    mouse: 2.5,
    touch: 3.5
  };
  var freeForceBoost = {
    mouse: 5,
    touch: 7
  };
  var baseSpeed = dragFree ? 5 : 16;
  var baseMass = 1;
  var dragThreshold = 20;
  var pointerIsDown = false;
  var preventScroll = false;
  var preventClick = false;
  var isMouse = false;

  function addActivationEvents() {
    var node = rootNode;
    activationEvents.add(node, 'touchmove', function () {
      return undefined;
    }).add(node, 'touchend', function () {
      return undefined;
    }).add(node, 'touchstart', down).add(node, 'mousedown', down).add(node, 'touchcancel', up).add(node, 'contextmenu', up).add(node, 'click', click);
  }

  function addInteractionEvents() {
    var node = !isMouse ? rootNode : document;
    interactionEvents.add(node, 'touchmove', move).add(node, 'touchend', up).add(node, 'mousemove', move).add(node, 'mouseup', up);
  }

  function removeAllEvents() {
    activationEvents.removeAll();
    interactionEvents.removeAll();
  }

  function isFocusNode(node) {
    var name = node.nodeName || '';
    return focusNodes.indexOf(name) > -1;
  }

  function forceBoost() {
    var boost = dragFree ? freeForceBoost : snapForceBoost;
    var type = isMouse ? 'mouse' : 'touch';
    return boost[type];
  }

  function allowedForce(force, targetChanged) {
    var next = index.clone().add(mathSign(force) * -1);
    var isEdge = next.get() === index.min || next.get() === index.max;
    var baseForce = scrollTarget.byDistance(force, !dragFree).distance;
    if (dragFree || Math.abs(force) < dragThreshold) return baseForce;
    if (!loop && isEdge) return baseForce * 0.6;
    if (skipSnaps && targetChanged) return baseForce * 0.5;
    return scrollTarget.byIndex(next.get(), 0).distance;
  }

  function down(evt) {
    isMouse = evt.type === 'mousedown';
    if (isMouse && evt.button !== 0) return;
    var isMoving = deltaAbs(target.get(), location.get()) >= 2;
    var clearPreventClick = isMouse || !isMoving;
    var isNotFocusNode = !isFocusNode(evt.target);
    var preventDefault = isMoving || isMouse && isNotFocusNode;
    pointerIsDown = true;
    dragTracker.pointerDown(evt);
    dragStartPoint.set(target);
    target.set(location);
    scrollBody.useBaseMass().useSpeed(80);
    addInteractionEvents();
    startScroll.set(dragTracker.readPoint(evt, scrollAxis));
    startCross.set(dragTracker.readPoint(evt, crossAxis));
    events.emit('pointerDown');
    if (clearPreventClick) preventClick = false;
    if (preventDefault) evt.preventDefault();
  }

  function move(evt) {
    if (!preventScroll && !isMouse) {
      if (!evt.cancelable) return up();
      var moveScroll = dragTracker.readPoint(evt, scrollAxis).get();
      var moveCross = dragTracker.readPoint(evt, crossAxis).get();
      var diffScroll = deltaAbs(moveScroll, startScroll.get());
      var diffCross = deltaAbs(moveCross, startCross.get());
      preventScroll = diffScroll > diffCross;
      if (!preventScroll && !preventClick) return up();
    }

    var diff = dragTracker.pointerMove(evt);
    if (!preventClick && diff) preventClick = true;
    animation.start();
    target.add(direction.applyTo(diff));
    evt.preventDefault();
  }

  function up() {
    var currentLocation = scrollTarget.byDistance(0, false);
    var targetChanged = currentLocation.index !== index.get();
    var rawForce = dragTracker.pointerUp() * forceBoost();
    var force = allowedForce(direction.applyTo(rawForce), targetChanged);
    var forceFactor = factorAbs(rawForce, force);
    var isMoving = deltaAbs(target.get(), dragStartPoint.get()) >= 0.5;
    var isVigorous = targetChanged && forceFactor > 0.75;
    var isBelowThreshold = Math.abs(rawForce) < dragThreshold;
    var speed = isVigorous ? 10 : baseSpeed;
    var mass = isVigorous ? baseMass + 2.5 * forceFactor : baseMass;
    if (isMoving && !isMouse) preventClick = true;
    preventScroll = false;
    pointerIsDown = false;
    interactionEvents.removeAll();
    scrollBody.useSpeed(isBelowThreshold ? 9 : speed).useMass(mass);
    scrollTo.distance(force, !dragFree);
    isMouse = false;
    events.emit('pointerUp');
  }

  function click(evt) {
    if (preventClick) evt.preventDefault();
  }

  function clickAllowed() {
    return !preventClick;
  }

  function pointerDown() {
    return pointerIsDown;
  }

  var self = {
    addActivationEvents: addActivationEvents,
    clickAllowed: clickAllowed,
    pointerDown: pointerDown,
    removeAllEvents: removeAllEvents
  };
  return self;
}

function DragTracker(axis, pxToPercent) {
  var scrollAxis = axis.scroll;
  var coords = {
    x: 'clientX',
    y: 'clientY'
  };
  var startDrag = Vector1D(0);
  var diffDrag = Vector1D(0);
  var lastDrag = Vector1D(0);
  var pointValue = Vector1D(0);
  var trackInterval = 10;
  var trackLength = 5;
  var trackTime = 100;
  var trackPoints = [];
  var lastMoveTime = new Date().getTime();
  var isMouse = false;

  function readPoint(evt, type) {
    isMouse = !evt.touches;
    var c = coords[type];
    var value = isMouse ? evt[c] : evt.touches[0][c];
    return pointValue.set(value);
  }

  function pointerDown(evt) {
    var point = readPoint(evt, scrollAxis);
    startDrag.set(point);
    lastDrag.set(point);
    return pxToPercent.measure(startDrag.get());
  }

  function pointerMove(evt) {
    var point = readPoint(evt, scrollAxis);
    var nowTime = new Date().getTime();
    var diffTime = nowTime - lastMoveTime;

    if (diffTime >= trackInterval) {
      if (diffTime >= trackTime) trackPoints = [];
      trackPoints.push(point.get());
      lastMoveTime = nowTime;
    }

    diffDrag.set(point).subtract(lastDrag);
    lastDrag.set(point);
    return pxToPercent.measure(diffDrag.get());
  }

  function pointerUp() {
    var nowTime = new Date().getTime();
    var diffTime = nowTime - lastMoveTime;
    var currentPoint = lastDrag.get();
    var force = trackPoints.slice(-trackLength).map(function (trackPoint) {
      return currentPoint - trackPoint;
    }).sort(function (p1, p2) {
      return Math.abs(p1) < Math.abs(p2) ? 1 : -1;
    })[0];
    lastDrag.set(diffTime > trackTime || !force ? 0 : force);
    trackPoints = [];
    return pxToPercent.measure(lastDrag.get());
  }

  var self = {
    pointerDown: pointerDown,
    pointerMove: pointerMove,
    pointerUp: pointerUp,
    readPoint: readPoint
  };
  return self;
}

function PxToPercent(viewInPx) {
  var totalPercent = 100;

  function measure(n) {
    if (viewInPx === 0) return 0;
    return n / viewInPx * totalPercent;
  }

  var self = {
    measure: measure,
    totalPercent: totalPercent
  };
  return self;
}

function ScrollBody(location, baseSpeed, baseMass) {
  var roundToTwoDecimals = roundToDecimals(2);
  var velocity = Vector1D(0);
  var acceleration = Vector1D(0);
  var attraction = Vector1D(0);
  var attractionDirection = 0;
  var speed = baseSpeed;
  var mass = baseMass;

  function update() {
    velocity.add(acceleration);
    location.add(velocity);
    acceleration.multiply(0);
  }

  function applyForce(force) {
    force.divide(mass);
    acceleration.add(force);
  }

  function seek(target) {
    attraction.set(target).subtract(location);
    var magnitude = map(attraction.get(), 0, 100, 0, speed);
    attractionDirection = mathSign(attraction.get());
    attraction.normalize().multiply(magnitude).subtract(velocity);
    applyForce(attraction);
    return self;
  }

  function settle(target) {
    var diff = target.get() - location.get();
    var hasSettled = !roundToTwoDecimals(diff);
    if (hasSettled) location.set(target);
    return hasSettled;
  }

  function direction() {
    return attractionDirection;
  }

  function useBaseSpeed() {
    return useSpeed(baseSpeed);
  }

  function useBaseMass() {
    return useMass(baseMass);
  }

  function useSpeed(n) {
    speed = n;
    return self;
  }

  function useMass(n) {
    mass = n;
    return self;
  }

  var self = {
    direction: direction,
    seek: seek,
    settle: settle,
    update: update,
    useBaseMass: useBaseMass,
    useBaseSpeed: useBaseSpeed,
    useMass: useMass,
    useSpeed: useSpeed
  };
  return self;
}

function ScrollBounds(limit, location, target, scrollBody) {
  var pullBackThreshold = 10;
  var disabled = false;

  function shouldConstrain() {
    if (disabled) return false;
    if (!limit.reachedAny(target.get())) return false;
    if (!limit.reachedAny(location.get())) return false;
    return true;
  }

  function constrain(pointerDown) {
    if (!shouldConstrain()) return;
    var friction = pointerDown ? 0.7 : 0.45;
    var diffToTarget = target.get() - location.get();
    target.subtract(diffToTarget * friction);

    if (!pointerDown && Math.abs(diffToTarget) < pullBackThreshold) {
      target.set(limit.constrain(target.get()));
      scrollBody.useSpeed(10).useMass(3);
    }
  }

  function toggleActive(active) {
    disabled = !active;
  }

  var self = {
    constrain: constrain,
    toggleActive: toggleActive
  };
  return self;
}

function ScrollContain(viewSize, contentSize, snaps, snapsAligned, containScroll) {
  var scrollBounds = Limit(-contentSize + viewSize, snaps[0]);
  var snapsBounded = snapsAligned.map(scrollBounds.constrain);
  var snapsContained = measureContained();

  function findDuplicates() {
    var startSnap = snapsBounded[0];
    var endSnap = arrayLast(snapsBounded);
    var min = snapsBounded.lastIndexOf(startSnap);
    var max = snapsBounded.indexOf(endSnap) + 1;
    return Limit(min, max);
  }

  function measureContained() {
    if (contentSize <= viewSize) return [scrollBounds.max];
    if (containScroll === 'keepSnaps') return snapsBounded;

    var _a = findDuplicates(),
        min = _a.min,
        max = _a.max;

    return snapsBounded.slice(min, max);
  }

  var self = {
    snapsContained: snapsContained
  };
  return self;
}

function ScrollLimit(contentSize, scrollSnaps, loop) {
  var limit = measureLimit();

  function measureLimit() {
    var startSnap = scrollSnaps[0];
    var endSnap = arrayLast(scrollSnaps);
    var min = loop ? startSnap - contentSize : endSnap;
    var max = startSnap;
    return Limit(min, max);
  }

  var self = {
    limit: limit
  };
  return self;
}

function ScrollLooper(contentSize, pxToPercent, limit, location, vectors) {
  var min = limit.min + pxToPercent.measure(0.1);
  var max = limit.max + pxToPercent.measure(0.1);

  var _a = Limit(min, max),
      reachedMin = _a.reachedMin,
      reachedMax = _a.reachedMax;

  function shouldLoop(direction) {
    if (direction === 1) return reachedMax(location.get());
    if (direction === -1) return reachedMin(location.get());
    return false;
  }

  function loop(direction) {
    if (!shouldLoop(direction)) return;
    var loopDistance = contentSize * (direction * -1);
    vectors.forEach(function (v) {
      return v.add(loopDistance);
    });
  }

  var self = {
    loop: loop
  };
  return self;
}

function ScrollProgress(limit) {
  var max = limit.max,
      scrollLength = limit.length;

  function get(n) {
    var currentLocation = n - max;
    return currentLocation / -scrollLength;
  }

  var self = {
    get: get
  };
  return self;
}

function ScrollSnap(axis, alignment, pxToPercent, containerRect, slideRects, slidesToScroll) {
  var startEdge = axis.startEdge,
      endEdge = axis.endEdge;
  var snaps = measureUnaligned();
  var snapsAligned = measureAligned();

  function measureSizes() {
    return groupArray(slideRects, slidesToScroll).map(function (rects) {
      return arrayLast(rects)[endEdge] - rects[0][startEdge];
    }).map(pxToPercent.measure).map(Math.abs);
  }

  function measureUnaligned() {
    return slideRects.map(function (rect) {
      return containerRect[startEdge] - rect[startEdge];
    }).map(pxToPercent.measure).map(function (snap) {
      return -Math.abs(snap);
    });
  }

  function measureAligned() {
    var groupedSnaps = groupArray(snaps, slidesToScroll).map(function (g) {
      return g[0];
    });
    var alignments = measureSizes().map(alignment.measure);
    return groupedSnaps.map(function (snap, index) {
      return snap + alignments[index];
    });
  }

  var self = {
    snaps: snaps,
    snapsAligned: snapsAligned
  };
  return self;
}

function ScrollTarget(loop, scrollSnaps, contentSize, limit, targetVector) {
  var reachedAny = limit.reachedAny,
      removeOffset = limit.removeOffset,
      constrain = limit.constrain;

  function minDistance(d1, d2) {
    return Math.abs(d1) < Math.abs(d2) ? d1 : d2;
  }

  function findTargetSnap(target) {
    var distance = loop ? removeOffset(target) : constrain(target);
    var ascDiffsToSnaps = scrollSnaps.map(function (scrollSnap) {
      return scrollSnap - distance;
    }).map(function (diffToSnap) {
      return shortcut(diffToSnap, 0);
    }).map(function (diff, i) {
      return {
        diff: diff,
        index: i
      };
    }).sort(function (d1, d2) {
      return Math.abs(d1.diff) - Math.abs(d2.diff);
    });
    var index = ascDiffsToSnaps[0].index;
    return {
      index: index,
      distance: distance
    };
  }

  function shortcut(target, direction) {
    var t1 = target;
    var t2 = target + contentSize;
    var t3 = target - contentSize;
    if (!loop) return t1;
    if (!direction) return minDistance(minDistance(t1, t2), t3);
    var shortest = minDistance(t1, direction === 1 ? t2 : t3);
    return Math.abs(shortest) * direction;
  }

  function byIndex(index, direction) {
    var diffToSnap = scrollSnaps[index] - targetVector.get();
    var distance = shortcut(diffToSnap, direction);
    return {
      index: index,
      distance: distance
    };
  }

  function byDistance(distance, snap) {
    var target = targetVector.get() + distance;

    var _a = findTargetSnap(target),
        index = _a.index,
        targetSnapDistance = _a.distance;

    var reachedBound = !loop && reachedAny(target);
    if (!snap || reachedBound) return {
      index: index,
      distance: distance
    };
    var diffToSnap = scrollSnaps[index] - targetSnapDistance;
    var snapDistance = distance + shortcut(diffToSnap, 0);
    return {
      index: index,
      distance: snapDistance
    };
  }

  var self = {
    byDistance: byDistance,
    byIndex: byIndex,
    shortcut: shortcut
  };
  return self;
}

function ScrollTo(animation, indexCurrent, indexPrevious, scrollTarget, targetVector, events) {
  function scrollTo(target) {
    var distanceDiff = target.distance;
    var indexDiff = target.index !== indexCurrent.get();

    if (distanceDiff) {
      animation.start();
      targetVector.add(distanceDiff);
    }

    if (indexDiff) {
      indexPrevious.set(indexCurrent.get());
      indexCurrent.set(target.index);
      events.emit('select');
    }
  }

  function distance(n, snap) {
    var target = scrollTarget.byDistance(n, snap);
    scrollTo(target);
  }

  function index(n, direction) {
    var targetIndex = indexCurrent.clone().set(n);
    var target = scrollTarget.byIndex(targetIndex.get(), direction);
    scrollTo(target);
  }

  var self = {
    distance: distance,
    index: index
  };
  return self;
}

function SlideLooper(axis, viewSize, contentSize, slideSizesWithGaps, scrollSnaps, slidesInView, scrollLocation, slides) {
  var ascItems = arrayKeys(slideSizesWithGaps);
  var descItems = arrayKeys(slideSizesWithGaps).reverse();
  var loopPoints = startPoints().concat(endPoints());

  function removeSlideSizes(indexes, from) {
    return indexes.reduce(function (a, i) {
      return a - slideSizesWithGaps[i];
    }, from);
  }

  function slidesInGap(indexes, gap) {
    return indexes.reduce(function (a, i) {
      var remainingGap = removeSlideSizes(a, gap);
      return remainingGap > 0 ? a.concat([i]) : a;
    }, []);
  }

  function findLoopPoints(indexes, edge) {
    var isStartEdge = edge === 'start';
    var offset = isStartEdge ? -contentSize : contentSize;
    var slideBounds = slidesInView.findSlideBounds(offset);
    return indexes.map(function (index) {
      var initial = isStartEdge ? 0 : -contentSize;
      var altered = isStartEdge ? contentSize : 0;
      var bounds = slideBounds.filter(function (b) {
        return b.index === index;
      })[0];
      var point = bounds[isStartEdge ? 'end' : 'start'];

      var getTarget = function getTarget() {
        return scrollLocation.get() > point ? initial : altered;
      };

      return {
        point: point,
        getTarget: getTarget,
        index: index,
        location: -1
      };
    });
  }

  function startPoints() {
    var gap = scrollSnaps[0] - 1;
    var indexes = slidesInGap(descItems, gap);
    return findLoopPoints(indexes, 'end');
  }

  function endPoints() {
    var gap = viewSize - scrollSnaps[0] - 1;
    var indexes = slidesInGap(ascItems, gap);
    return findLoopPoints(indexes, 'start');
  }

  function canLoop() {
    return loopPoints.every(function (_a) {
      var index = _a.index;
      var otherIndexes = ascItems.filter(function (i) {
        return i !== index;
      });
      return removeSlideSizes(otherIndexes, viewSize) <= 0;
    });
  }

  function loop() {
    loopPoints.forEach(function (loopPoint) {
      var getTarget = loopPoint.getTarget,
          location = loopPoint.location,
          index = loopPoint.index;
      var target = getTarget();

      if (target !== location) {
        slides[index].style[axis.startEdge] = target + "%";
        loopPoint.location = target;
      }
    });
  }

  function clear() {
    loopPoints.forEach(function (_a) {
      var index = _a.index;
      slides[index].style[axis.startEdge] = '';
    });
  }

  var self = {
    canLoop: canLoop,
    clear: clear,
    loop: loop,
    loopPoints: loopPoints
  };
  return self;
}

function SlidesInView(viewSize, contentSize, slideSizes, snaps, loop, inViewThreshold) {
  var threshold = Math.min(Math.max(inViewThreshold, 0.01), 0.99);
  var offsets = loop ? [0, contentSize, -contentSize] : [0];
  var slideBounds = offsets.reduce(function (a, offset) {
    return a.concat(findSlideBounds(offset, threshold));
  }, []);

  function findSlideBounds(offset, threshold) {
    var thresholds = slideSizes.map(function (s) {
      return s * (threshold || 0);
    });
    return snaps.map(function (snap, index) {
      return {
        start: snap - slideSizes[index] + thresholds[index] + offset,
        end: snap + viewSize - thresholds[index] + offset,
        index: index
      };
    });
  }

  function check(location) {
    return slideBounds.reduce(function (list, slideBound) {
      var index = slideBound.index,
          start = slideBound.start,
          end = slideBound.end;
      var inList = list.indexOf(index) !== -1;
      var inView = start < location && end > location;
      return !inList && inView ? list.concat([index]) : list;
    }, []);
  }

  var self = {
    check: check,
    findSlideBounds: findSlideBounds
  };
  return self;
}

function SlideSizes(axis, pxToPercent, slides, slideRects, loop) {
  var measureSize = axis.measureSize,
      startEdge = axis.startEdge,
      endEdge = axis.endEdge;
  var sizesInPx = slideRects.map(measureSize);
  var slideSizes = sizesInPx.map(pxToPercent.measure);
  var slideSizesWithGaps = measureWithGaps();

  function measureWithGaps() {
    return slideRects.map(function (rect, index, rects) {
      var isLast = index === lastIndex(rects);
      var style = window.getComputedStyle(arrayLast(slides));
      var endGap = parseFloat(style.getPropertyValue("margin-" + endEdge));
      if (isLast) return sizesInPx[index] + (loop ? endGap : 0);
      return rects[index + 1][startEdge] - rect[startEdge];
    }).map(pxToPercent.measure).map(Math.abs);
  }

  var self = {
    slideSizes: slideSizes,
    slideSizesWithGaps: slideSizesWithGaps
  };
  return self;
}

function Translate(axis, direction, container) {
  var containerStyle = container.style;
  var translate = axis.scroll === 'x' ? x : y;
  var disabled = false;

  function x(n) {
    return "translate3d(" + n + "%,0px,0px)";
  }

  function y(n) {
    return "translate3d(0px," + n + "%,0px)";
  }

  function to(target) {
    if (disabled) return;
    containerStyle.transform = translate(direction.applyTo(target.get()));
  }

  function toggleActive(active) {
    disabled = !active;
  }

  function clear() {
    containerStyle.transform = '';
  }

  var self = {
    clear: clear,
    to: to,
    toggleActive: toggleActive
  };
  return self;
}

function Engine(root, container, slides, options, events) {
  // Options
  var align = options.align,
      scrollAxis = options.axis,
      contentDirection = options.direction,
      startIndex = options.startIndex,
      inViewThreshold = options.inViewThreshold,
      loop = options.loop,
      speed = options.speed,
      dragFree = options.dragFree,
      slidesToScroll = options.slidesToScroll,
      skipSnaps = options.skipSnaps,
      containScroll = options.containScroll; // Measurements

  var containerRect = container.getBoundingClientRect();
  var slideRects = slides.map(function (slide) {
    return slide.getBoundingClientRect();
  });
  var direction = Direction(contentDirection);
  var axis = Axis(scrollAxis, contentDirection);
  var pxToPercent = PxToPercent(axis.measureSize(containerRect));
  var viewSize = pxToPercent.totalPercent;
  var alignment = Alignment(align, viewSize);

  var _a = SlideSizes(axis, pxToPercent, slides, slideRects, loop),
      slideSizes = _a.slideSizes,
      slideSizesWithGaps = _a.slideSizesWithGaps;

  var _b = ScrollSnap(axis, alignment, pxToPercent, containerRect, slideRects, slidesToScroll),
      snaps = _b.snaps,
      snapsAligned = _b.snapsAligned;

  var contentSize = -arrayLast(snaps) + arrayLast(slideSizesWithGaps);
  var snapsContained = ScrollContain(viewSize, contentSize, snaps, snapsAligned, containScroll).snapsContained;
  var contain = !loop && containScroll !== '';
  var scrollSnaps = contain ? snapsContained : snapsAligned;
  var limit = ScrollLimit(contentSize, scrollSnaps, loop).limit; // Indexes

  var index = Counter(lastIndex(scrollSnaps), startIndex, loop);
  var indexPrevious = index.clone();
  var slideIndexes = arrayKeys(slides); // Draw

  var update = function update() {
    if (!loop) engine.scrollBounds.constrain(engine.dragHandler.pointerDown());
    engine.scrollBody.seek(target).update();
    var settled = engine.scrollBody.settle(target);

    if (settled && !engine.dragHandler.pointerDown()) {
      engine.animation.stop();
      events.emit('settle');
    }

    if (!settled) {
      events.emit('scroll');
    }

    if (loop) {
      engine.scrollLooper.loop(engine.scrollBody.direction());
      engine.slideLooper.loop();
    }

    engine.translate.to(location);
    engine.animation.proceed();
  }; // Shared


  var animation = Animation(update);
  var startLocation = scrollSnaps[index.get()];
  var location = Vector1D(startLocation);
  var target = Vector1D(startLocation);
  var scrollBody = ScrollBody(location, speed, 1);
  var scrollTarget = ScrollTarget(loop, scrollSnaps, contentSize, limit, target);
  var scrollTo = ScrollTo(animation, index, indexPrevious, scrollTarget, target, events);
  var slidesInView = SlidesInView(viewSize, contentSize, slideSizes, snaps, loop, inViewThreshold); // DragHandler

  var dragHandler = DragHandler(axis, direction, root, target, dragFree, DragTracker(axis, pxToPercent), location, animation, scrollTo, scrollBody, scrollTarget, index, events, loop, skipSnaps); // Slider

  var engine = {
    animation: animation,
    axis: axis,
    direction: direction,
    dragHandler: dragHandler,
    eventStore: EventStore(),
    pxToPercent: pxToPercent,
    index: index,
    indexPrevious: indexPrevious,
    limit: limit,
    location: location,
    options: options,
    scrollBody: scrollBody,
    scrollBounds: ScrollBounds(limit, location, target, scrollBody),
    scrollLooper: ScrollLooper(contentSize, pxToPercent, limit, location, [location, target]),
    scrollProgress: ScrollProgress(limit),
    scrollSnaps: scrollSnaps,
    scrollTarget: scrollTarget,
    scrollTo: scrollTo,
    slideLooper: SlideLooper(axis, viewSize, contentSize, slideSizesWithGaps, scrollSnaps, slidesInView, location, slides),
    slidesInView: slidesInView,
    slideIndexes: slideIndexes,
    target: target,
    translate: Translate(axis, direction, container)
  };
  return engine;
}

function EventEmitter() {
  var listeners = {};

  function getListeners(evt) {
    return listeners[evt] || [];
  }

  function emit(evt) {
    getListeners(evt).forEach(function (e) {
      return e(evt);
    });
    return self;
  }

  function on(evt, cb) {
    listeners[evt] = getListeners(evt).concat([cb]);
    return self;
  }

  function off(evt, cb) {
    listeners[evt] = getListeners(evt).filter(function (e) {
      return e !== cb;
    });
    return self;
  }

  var self = {
    emit: emit,
    off: off,
    on: on
  };
  return self;
}

var defaultOptions = {
  align: 'center',
  axis: 'x',
  containScroll: '',
  direction: 'ltr',
  dragFree: false,
  draggable: true,
  inViewThreshold: 0,
  loop: false,
  skipSnaps: false,
  slidesToScroll: 1,
  speed: 10,
  startIndex: 0
};

function OptionsPseudo(node) {
  var pseudoString = getComputedStyle(node, ':before').content;

  function get() {
    try {
      return JSON.parse(pseudoString.slice(1, -1).replace(/\\/g, ''));
    } catch (error) {} // eslint-disable-line no-empty


    return {};
  }

  var self = {
    get: get
  };
  return self;
}

function EmblaCarousel(nodes, userOptions, userPlugins) {
  var events = EventEmitter();
  var debouncedResize = debounce(resize, 500);
  var reInit = reActivate;
  var on = events.on,
      off = events.off;
  var engine;
  var activated = false;
  var optionsBase = Object.assign({}, defaultOptions);
  var options = Object.assign({}, optionsBase);
  var optionsPseudo;
  var plugins;
  var rootSize = 0;
  var root;
  var container;
  var slides;

  function setupElements() {
    var providedContainer = 'container' in nodes && nodes.container;
    var providedSlides = 'slides' in nodes && nodes.slides;
    root = 'root' in nodes ? nodes.root : nodes;
    container = providedContainer || root.children[0];
    slides = providedSlides || [].slice.call(container.children);
    optionsPseudo = OptionsPseudo(root);
  }

  function activate(withOptions, withPlugins) {
    setupElements();
    optionsBase = Object.assign({}, optionsBase, withOptions);
    options = Object.assign({}, optionsBase, optionsPseudo.get());
    plugins = Object.assign([], withPlugins);
    engine = Engine(root, container, slides, options, events);
    engine.eventStore.add(window, 'resize', debouncedResize);
    engine.translate.to(engine.location);
    rootSize = engine.axis.measureSize(root.getBoundingClientRect());
    plugins.forEach(function (plugin) {
      return plugin.init(self);
    });

    if (options.loop) {
      if (!engine.slideLooper.canLoop()) {
        deActivate();
        return activate({
          loop: false
        }, withPlugins);
      }

      engine.slideLooper.loop();
    }

    if (options.draggable && container.offsetParent && slides.length) {
      engine.dragHandler.addActivationEvents();
    }

    if (!activated) {
      setTimeout(function () {
        return events.emit('init');
      }, 0);
      activated = true;
    }
  }

  function reActivate(withOptions, withPlugins) {
    if (!activated) return;
    var startIndex = selectedScrollSnap();
    var newOptions = Object.assign({
      startIndex: startIndex
    }, withOptions);
    deActivate();
    activate(newOptions, withPlugins || plugins);
    events.emit('reInit');
  }

  function deActivate() {
    engine.dragHandler.removeAllEvents();
    engine.animation.stop();
    engine.eventStore.removeAll();
    engine.translate.clear();
    engine.slideLooper.clear();
    plugins.forEach(function (plugin) {
      return plugin.destroy();
    });
  }

  function destroy() {
    if (!activated) return;
    deActivate();
    activated = false;
    events.emit('destroy');
  }

  function resize() {
    if (!activated) return;
    var size = engine.axis.measureSize(root.getBoundingClientRect());
    if (rootSize !== size) reActivate();
    events.emit('resize');
  }

  function slidesInView(target) {
    var location = engine[target ? 'target' : 'location'].get();
    var type = options.loop ? 'removeOffset' : 'constrain';
    return engine.slidesInView.check(engine.limit[type](location));
  }

  function slidesNotInView(target) {
    var inView = slidesInView(target);
    return engine.slideIndexes.filter(function (index) {
      return inView.indexOf(index) === -1;
    });
  }

  function scrollTo(index, jump, direction) {
    engine.scrollBody.useBaseMass().useSpeed(jump ? 100 : options.speed);
    if (activated) engine.scrollTo.index(index, direction || 0);
  }

  function scrollNext(jump) {
    var next = engine.index.clone().add(1);
    scrollTo(next.get(), jump === true, -1);
  }

  function scrollPrev(jump) {
    var prev = engine.index.clone().add(-1);
    scrollTo(prev.get(), jump === true, 1);
  }

  function canScrollNext() {
    var next = engine.index.clone().add(1);
    return next.get() !== selectedScrollSnap();
  }

  function canScrollPrev() {
    var prev = engine.index.clone().add(-1);
    return prev.get() !== selectedScrollSnap();
  }

  function scrollSnapList() {
    return engine.scrollSnaps.map(engine.scrollProgress.get);
  }

  function scrollProgress() {
    return engine.scrollProgress.get(engine.location.get());
  }

  function selectedScrollSnap() {
    return engine.index.get();
  }

  function previousScrollSnap() {
    return engine.indexPrevious.get();
  }

  function clickAllowed() {
    return engine.dragHandler.clickAllowed();
  }

  function internalEngine() {
    return engine;
  }

  function rootNode() {
    return root;
  }

  function containerNode() {
    return container;
  }

  function slideNodes() {
    return slides;
  }

  var self = {
    canScrollNext: canScrollNext,
    canScrollPrev: canScrollPrev,
    clickAllowed: clickAllowed,
    containerNode: containerNode,
    internalEngine: internalEngine,
    destroy: destroy,
    off: off,
    on: on,
    previousScrollSnap: previousScrollSnap,
    reInit: reInit,
    rootNode: rootNode,
    scrollNext: scrollNext,
    scrollPrev: scrollPrev,
    scrollProgress: scrollProgress,
    scrollSnapList: scrollSnapList,
    scrollTo: scrollTo,
    selectedScrollSnap: selectedScrollSnap,
    slideNodes: slideNodes,
    slidesInView: slidesInView,
    slidesNotInView: slidesNotInView
  };
  activate(userOptions, userPlugins);
  return self;
}

/* harmony default export */ __webpack_exports__["default"] = (EmblaCarousel);

/***/ }),

/***/ "./node_modules/micromodal/dist/micromodal.es.js":
/*!*******************************************************!*\
  !*** ./node_modules/micromodal/dist/micromodal.es.js ***!
  \*******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function e(e, t) {
  for (var o = 0; o < t.length; o++) {
    var n = t[o];
    n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n);
  }
}

function t(e) {
  return function (e) {
    if (Array.isArray(e)) return o(e);
  }(e) || function (e) {
    if ("undefined" != typeof Symbol && Symbol.iterator in Object(e)) return Array.from(e);
  }(e) || function (e, t) {
    if (!e) return;
    if ("string" == typeof e) return o(e, t);
    var n = Object.prototype.toString.call(e).slice(8, -1);
    "Object" === n && e.constructor && (n = e.constructor.name);
    if ("Map" === n || "Set" === n) return Array.from(e);
    if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return o(e, t);
  }(e) || function () {
    throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
  }();
}

function o(e, t) {
  (null == t || t > e.length) && (t = e.length);

  for (var o = 0, n = new Array(t); o < t; o++) {
    n[o] = e[o];
  }

  return n;
}

var n,
    i,
    a,
    r,
    s,
    l = (n = ["a[href]", "area[href]", 'input:not([disabled]):not([type="hidden"]):not([aria-hidden])', "select:not([disabled]):not([aria-hidden])", "textarea:not([disabled]):not([aria-hidden])", "button:not([disabled]):not([aria-hidden])", "iframe", "object", "embed", "[contenteditable]", '[tabindex]:not([tabindex^="-"])'], i = function () {
  function o(e) {
    var n = e.targetModal,
        i = e.triggers,
        a = void 0 === i ? [] : i,
        r = e.onShow,
        s = void 0 === r ? function () {} : r,
        l = e.onClose,
        c = void 0 === l ? function () {} : l,
        d = e.openTrigger,
        u = void 0 === d ? "data-micromodal-trigger" : d,
        f = e.closeTrigger,
        h = void 0 === f ? "data-micromodal-close" : f,
        v = e.openClass,
        g = void 0 === v ? "is-open" : v,
        m = e.disableScroll,
        b = void 0 !== m && m,
        y = e.disableFocus,
        p = void 0 !== y && y,
        w = e.awaitCloseAnimation,
        E = void 0 !== w && w,
        k = e.awaitOpenAnimation,
        M = void 0 !== k && k,
        A = e.debugMode,
        C = void 0 !== A && A;
    !function (e, t) {
      if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function");
    }(this, o), this.modal = document.getElementById(n), this.config = {
      debugMode: C,
      disableScroll: b,
      openTrigger: u,
      closeTrigger: h,
      openClass: g,
      onShow: s,
      onClose: c,
      awaitCloseAnimation: E,
      awaitOpenAnimation: M,
      disableFocus: p
    }, a.length > 0 && this.registerTriggers.apply(this, t(a)), this.onClick = this.onClick.bind(this), this.onKeydown = this.onKeydown.bind(this);
  }

  var i, a, r;
  return i = o, (a = [{
    key: "registerTriggers",
    value: function value() {
      for (var e = this, t = arguments.length, o = new Array(t), n = 0; n < t; n++) {
        o[n] = arguments[n];
      }

      o.filter(Boolean).forEach(function (t) {
        t.addEventListener("click", function (t) {
          return e.showModal(t);
        });
      });
    }
  }, {
    key: "showModal",
    value: function value() {
      var e = this,
          t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null;

      if (this.activeElement = document.activeElement, this.modal.setAttribute("aria-hidden", "false"), this.modal.classList.add(this.config.openClass), this.scrollBehaviour("disable"), this.addEventListeners(), this.config.awaitOpenAnimation) {
        var o = function t() {
          e.modal.removeEventListener("animationend", t, !1), e.setFocusToFirstNode();
        };

        this.modal.addEventListener("animationend", o, !1);
      } else this.setFocusToFirstNode();

      this.config.onShow(this.modal, this.activeElement, t);
    }
  }, {
    key: "closeModal",
    value: function value() {
      var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null,
          t = this.modal;

      if (this.modal.setAttribute("aria-hidden", "true"), this.removeEventListeners(), this.scrollBehaviour("enable"), this.activeElement && this.activeElement.focus && this.activeElement.focus(), this.config.onClose(this.modal, this.activeElement, e), this.config.awaitCloseAnimation) {
        var o = this.config.openClass;
        this.modal.addEventListener("animationend", function e() {
          t.classList.remove(o), t.removeEventListener("animationend", e, !1);
        }, !1);
      } else t.classList.remove(this.config.openClass);
    }
  }, {
    key: "closeModalById",
    value: function value(e) {
      this.modal = document.getElementById(e), this.modal && this.closeModal();
    }
  }, {
    key: "scrollBehaviour",
    value: function value(e) {
      if (this.config.disableScroll) {
        var t = document.querySelector("body");

        switch (e) {
          case "enable":
            Object.assign(t.style, {
              overflow: ""
            });
            break;

          case "disable":
            Object.assign(t.style, {
              overflow: "hidden"
            });
        }
      }
    }
  }, {
    key: "addEventListeners",
    value: function value() {
      this.modal.addEventListener("touchstart", this.onClick), this.modal.addEventListener("click", this.onClick), document.addEventListener("keydown", this.onKeydown);
    }
  }, {
    key: "removeEventListeners",
    value: function value() {
      this.modal.removeEventListener("touchstart", this.onClick), this.modal.removeEventListener("click", this.onClick), document.removeEventListener("keydown", this.onKeydown);
    }
  }, {
    key: "onClick",
    value: function value(e) {
      (e.target.hasAttribute(this.config.closeTrigger) || e.target.parentNode.hasAttribute(this.config.closeTrigger)) && (e.preventDefault(), e.stopPropagation(), this.closeModal(e));
    }
  }, {
    key: "onKeydown",
    value: function value(e) {
      27 === e.keyCode && this.closeModal(e), 9 === e.keyCode && this.retainFocus(e);
    }
  }, {
    key: "getFocusableNodes",
    value: function value() {
      var e = this.modal.querySelectorAll(n);
      return Array.apply(void 0, t(e));
    }
  }, {
    key: "setFocusToFirstNode",
    value: function value() {
      var e = this;

      if (!this.config.disableFocus) {
        var t = this.getFocusableNodes();

        if (0 !== t.length) {
          var o = t.filter(function (t) {
            return !t.hasAttribute(e.config.closeTrigger);
          });
          o.length > 0 && o[0].focus(), 0 === o.length && t[0].focus();
        }
      }
    }
  }, {
    key: "retainFocus",
    value: function value(e) {
      var t = this.getFocusableNodes();
      if (0 !== t.length) if (t = t.filter(function (e) {
        return null !== e.offsetParent;
      }), this.modal.contains(document.activeElement)) {
        var o = t.indexOf(document.activeElement);
        e.shiftKey && 0 === o && (t[t.length - 1].focus(), e.preventDefault()), !e.shiftKey && t.length > 0 && o === t.length - 1 && (t[0].focus(), e.preventDefault());
      } else t[0].focus();
    }
  }]) && e(i.prototype, a), r && e(i, r), o;
}(), a = null, r = function r(e) {
  if (!document.getElementById(e)) return console.warn("MicroModal: ❗Seems like you have missed %c'".concat(e, "'"), "background-color: #f8f9fa;color: #50596c;font-weight: bold;", "ID somewhere in your code. Refer example below to resolve it."), console.warn("%cExample:", "background-color: #f8f9fa;color: #50596c;font-weight: bold;", '<div class="modal" id="'.concat(e, '"></div>')), !1;
}, s = function s(e, t) {
  if (function (e) {
    e.length <= 0 && (console.warn("MicroModal: ❗Please specify at least one %c'micromodal-trigger'", "background-color: #f8f9fa;color: #50596c;font-weight: bold;", "data attribute."), console.warn("%cExample:", "background-color: #f8f9fa;color: #50596c;font-weight: bold;", '<a href="#" data-micromodal-trigger="my-modal"></a>'));
  }(e), !t) return !0;

  for (var o in t) {
    r(o);
  }

  return !0;
}, {
  init: function init(e) {
    var o = Object.assign({}, {
      openTrigger: "data-micromodal-trigger"
    }, e),
        n = t(document.querySelectorAll("[".concat(o.openTrigger, "]"))),
        r = function (e, t) {
      var o = [];
      return e.forEach(function (e) {
        var n = e.attributes[t].value;
        void 0 === o[n] && (o[n] = []), o[n].push(e);
      }), o;
    }(n, o.openTrigger);

    if (!0 !== o.debugMode || !1 !== s(n, r)) for (var l in r) {
      var c = r[l];
      o.targetModal = l, o.triggers = t(c), a = new i(o);
    }
  },
  show: function show(e, t) {
    var o = t || {};
    o.targetModal = e, !0 === o.debugMode && !1 === r(e) || (a && a.removeEventListeners(), (a = new i(o)).showModal());
  },
  close: function close(e) {
    e ? a.closeModalById(e) : a.closeModal();
  }
});
"undefined" != typeof window && (window.MicroModal = l);
/* harmony default export */ __webpack_exports__["default"] = (l);

/***/ }),

/***/ "./node_modules/regenerator-runtime/runtime.js":
/*!*****************************************************!*\
  !*** ./node_modules/regenerator-runtime/runtime.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(module) {function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

/**
 * Copyright (c) 2014-present, Facebook, Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */
var runtime = function (exports) {
  "use strict";

  var Op = Object.prototype;
  var hasOwn = Op.hasOwnProperty;
  var undefined; // More compressible than void 0.

  var $Symbol = typeof Symbol === "function" ? Symbol : {};
  var iteratorSymbol = $Symbol.iterator || "@@iterator";
  var asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator";
  var toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag";

  function define(obj, key, value) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
    return obj[key];
  }

  try {
    // IE 8 has a broken Object.defineProperty that only works on DOM objects.
    define({}, "");
  } catch (err) {
    define = function define(obj, key, value) {
      return obj[key] = value;
    };
  }

  function wrap(innerFn, outerFn, self, tryLocsList) {
    // If outerFn provided and outerFn.prototype is a Generator, then outerFn.prototype instanceof Generator.
    var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator;
    var generator = Object.create(protoGenerator.prototype);
    var context = new Context(tryLocsList || []); // The ._invoke method unifies the implementations of the .next,
    // .throw, and .return methods.

    generator._invoke = makeInvokeMethod(innerFn, self, context);
    return generator;
  }

  exports.wrap = wrap; // Try/catch helper to minimize deoptimizations. Returns a completion
  // record like context.tryEntries[i].completion. This interface could
  // have been (and was previously) designed to take a closure to be
  // invoked without arguments, but in all the cases we care about we
  // already have an existing method we want to call, so there's no need
  // to create a new function object. We can even get away with assuming
  // the method takes exactly one argument, since that happens to be true
  // in every case, so we don't have to touch the arguments object. The
  // only additional allocation required is the completion record, which
  // has a stable shape and so hopefully should be cheap to allocate.

  function tryCatch(fn, obj, arg) {
    try {
      return {
        type: "normal",
        arg: fn.call(obj, arg)
      };
    } catch (err) {
      return {
        type: "throw",
        arg: err
      };
    }
  }

  var GenStateSuspendedStart = "suspendedStart";
  var GenStateSuspendedYield = "suspendedYield";
  var GenStateExecuting = "executing";
  var GenStateCompleted = "completed"; // Returning this object from the innerFn has the same effect as
  // breaking out of the dispatch switch statement.

  var ContinueSentinel = {}; // Dummy constructor functions that we use as the .constructor and
  // .constructor.prototype properties for functions that return Generator
  // objects. For full spec compliance, you may wish to configure your
  // minifier not to mangle the names of these two functions.

  function Generator() {}

  function GeneratorFunction() {}

  function GeneratorFunctionPrototype() {} // This is a polyfill for %IteratorPrototype% for environments that
  // don't natively support it.


  var IteratorPrototype = {};
  define(IteratorPrototype, iteratorSymbol, function () {
    return this;
  });
  var getProto = Object.getPrototypeOf;
  var NativeIteratorPrototype = getProto && getProto(getProto(values([])));

  if (NativeIteratorPrototype && NativeIteratorPrototype !== Op && hasOwn.call(NativeIteratorPrototype, iteratorSymbol)) {
    // This environment has a native %IteratorPrototype%; use it instead
    // of the polyfill.
    IteratorPrototype = NativeIteratorPrototype;
  }

  var Gp = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(IteratorPrototype);
  GeneratorFunction.prototype = GeneratorFunctionPrototype;
  define(Gp, "constructor", GeneratorFunctionPrototype);
  define(GeneratorFunctionPrototype, "constructor", GeneratorFunction);
  GeneratorFunction.displayName = define(GeneratorFunctionPrototype, toStringTagSymbol, "GeneratorFunction"); // Helper for defining the .next, .throw, and .return methods of the
  // Iterator interface in terms of a single ._invoke method.

  function defineIteratorMethods(prototype) {
    ["next", "throw", "return"].forEach(function (method) {
      define(prototype, method, function (arg) {
        return this._invoke(method, arg);
      });
    });
  }

  exports.isGeneratorFunction = function (genFun) {
    var ctor = typeof genFun === "function" && genFun.constructor;
    return ctor ? ctor === GeneratorFunction || // For the native GeneratorFunction constructor, the best we can
    // do is to check its .name property.
    (ctor.displayName || ctor.name) === "GeneratorFunction" : false;
  };

  exports.mark = function (genFun) {
    if (Object.setPrototypeOf) {
      Object.setPrototypeOf(genFun, GeneratorFunctionPrototype);
    } else {
      genFun.__proto__ = GeneratorFunctionPrototype;
      define(genFun, toStringTagSymbol, "GeneratorFunction");
    }

    genFun.prototype = Object.create(Gp);
    return genFun;
  }; // Within the body of any async function, `await x` is transformed to
  // `yield regeneratorRuntime.awrap(x)`, so that the runtime can test
  // `hasOwn.call(value, "__await")` to determine if the yielded value is
  // meant to be awaited.


  exports.awrap = function (arg) {
    return {
      __await: arg
    };
  };

  function AsyncIterator(generator, PromiseImpl) {
    function invoke(method, arg, resolve, reject) {
      var record = tryCatch(generator[method], generator, arg);

      if (record.type === "throw") {
        reject(record.arg);
      } else {
        var result = record.arg;
        var value = result.value;

        if (value && _typeof(value) === "object" && hasOwn.call(value, "__await")) {
          return PromiseImpl.resolve(value.__await).then(function (value) {
            invoke("next", value, resolve, reject);
          }, function (err) {
            invoke("throw", err, resolve, reject);
          });
        }

        return PromiseImpl.resolve(value).then(function (unwrapped) {
          // When a yielded Promise is resolved, its final value becomes
          // the .value of the Promise<{value,done}> result for the
          // current iteration.
          result.value = unwrapped;
          resolve(result);
        }, function (error) {
          // If a rejected Promise was yielded, throw the rejection back
          // into the async generator function so it can be handled there.
          return invoke("throw", error, resolve, reject);
        });
      }
    }

    var previousPromise;

    function enqueue(method, arg) {
      function callInvokeWithMethodAndArg() {
        return new PromiseImpl(function (resolve, reject) {
          invoke(method, arg, resolve, reject);
        });
      }

      return previousPromise = // If enqueue has been called before, then we want to wait until
      // all previous Promises have been resolved before calling invoke,
      // so that results are always delivered in the correct order. If
      // enqueue has not been called before, then it is important to
      // call invoke immediately, without waiting on a callback to fire,
      // so that the async generator function has the opportunity to do
      // any necessary setup in a predictable way. This predictability
      // is why the Promise constructor synchronously invokes its
      // executor callback, and why async functions synchronously
      // execute code before the first await. Since we implement simple
      // async functions in terms of async generators, it is especially
      // important to get this right, even though it requires care.
      previousPromise ? previousPromise.then(callInvokeWithMethodAndArg, // Avoid propagating failures to Promises returned by later
      // invocations of the iterator.
      callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg();
    } // Define the unified helper method that is used to implement .next,
    // .throw, and .return (see defineIteratorMethods).


    this._invoke = enqueue;
  }

  defineIteratorMethods(AsyncIterator.prototype);
  define(AsyncIterator.prototype, asyncIteratorSymbol, function () {
    return this;
  });
  exports.AsyncIterator = AsyncIterator; // Note that simple async functions are implemented on top of
  // AsyncIterator objects; they just return a Promise for the value of
  // the final result produced by the iterator.

  exports.async = function (innerFn, outerFn, self, tryLocsList, PromiseImpl) {
    if (PromiseImpl === void 0) PromiseImpl = Promise;
    var iter = new AsyncIterator(wrap(innerFn, outerFn, self, tryLocsList), PromiseImpl);
    return exports.isGeneratorFunction(outerFn) ? iter // If outerFn is a generator, return the full iterator.
    : iter.next().then(function (result) {
      return result.done ? result.value : iter.next();
    });
  };

  function makeInvokeMethod(innerFn, self, context) {
    var state = GenStateSuspendedStart;
    return function invoke(method, arg) {
      if (state === GenStateExecuting) {
        throw new Error("Generator is already running");
      }

      if (state === GenStateCompleted) {
        if (method === "throw") {
          throw arg;
        } // Be forgiving, per 25.3.3.3.3 of the spec:
        // https://people.mozilla.org/~jorendorff/es6-draft.html#sec-generatorresume


        return doneResult();
      }

      context.method = method;
      context.arg = arg;

      while (true) {
        var delegate = context.delegate;

        if (delegate) {
          var delegateResult = maybeInvokeDelegate(delegate, context);

          if (delegateResult) {
            if (delegateResult === ContinueSentinel) continue;
            return delegateResult;
          }
        }

        if (context.method === "next") {
          // Setting context._sent for legacy support of Babel's
          // function.sent implementation.
          context.sent = context._sent = context.arg;
        } else if (context.method === "throw") {
          if (state === GenStateSuspendedStart) {
            state = GenStateCompleted;
            throw context.arg;
          }

          context.dispatchException(context.arg);
        } else if (context.method === "return") {
          context.abrupt("return", context.arg);
        }

        state = GenStateExecuting;
        var record = tryCatch(innerFn, self, context);

        if (record.type === "normal") {
          // If an exception is thrown from innerFn, we leave state ===
          // GenStateExecuting and loop back for another invocation.
          state = context.done ? GenStateCompleted : GenStateSuspendedYield;

          if (record.arg === ContinueSentinel) {
            continue;
          }

          return {
            value: record.arg,
            done: context.done
          };
        } else if (record.type === "throw") {
          state = GenStateCompleted; // Dispatch the exception by looping back around to the
          // context.dispatchException(context.arg) call above.

          context.method = "throw";
          context.arg = record.arg;
        }
      }
    };
  } // Call delegate.iterator[context.method](context.arg) and handle the
  // result, either by returning a { value, done } result from the
  // delegate iterator, or by modifying context.method and context.arg,
  // setting context.delegate to null, and returning the ContinueSentinel.


  function maybeInvokeDelegate(delegate, context) {
    var method = delegate.iterator[context.method];

    if (method === undefined) {
      // A .throw or .return when the delegate iterator has no .throw
      // method always terminates the yield* loop.
      context.delegate = null;

      if (context.method === "throw") {
        // Note: ["return"] must be used for ES3 parsing compatibility.
        if (delegate.iterator["return"]) {
          // If the delegate iterator has a return method, give it a
          // chance to clean up.
          context.method = "return";
          context.arg = undefined;
          maybeInvokeDelegate(delegate, context);

          if (context.method === "throw") {
            // If maybeInvokeDelegate(context) changed context.method from
            // "return" to "throw", let that override the TypeError below.
            return ContinueSentinel;
          }
        }

        context.method = "throw";
        context.arg = new TypeError("The iterator does not provide a 'throw' method");
      }

      return ContinueSentinel;
    }

    var record = tryCatch(method, delegate.iterator, context.arg);

    if (record.type === "throw") {
      context.method = "throw";
      context.arg = record.arg;
      context.delegate = null;
      return ContinueSentinel;
    }

    var info = record.arg;

    if (!info) {
      context.method = "throw";
      context.arg = new TypeError("iterator result is not an object");
      context.delegate = null;
      return ContinueSentinel;
    }

    if (info.done) {
      // Assign the result of the finished delegate to the temporary
      // variable specified by delegate.resultName (see delegateYield).
      context[delegate.resultName] = info.value; // Resume execution at the desired location (see delegateYield).

      context.next = delegate.nextLoc; // If context.method was "throw" but the delegate handled the
      // exception, let the outer generator proceed normally. If
      // context.method was "next", forget context.arg since it has been
      // "consumed" by the delegate iterator. If context.method was
      // "return", allow the original .return call to continue in the
      // outer generator.

      if (context.method !== "return") {
        context.method = "next";
        context.arg = undefined;
      }
    } else {
      // Re-yield the result returned by the delegate method.
      return info;
    } // The delegate iterator is finished, so forget it and continue with
    // the outer generator.


    context.delegate = null;
    return ContinueSentinel;
  } // Define Generator.prototype.{next,throw,return} in terms of the
  // unified ._invoke helper method.


  defineIteratorMethods(Gp);
  define(Gp, toStringTagSymbol, "Generator"); // A Generator should always return itself as the iterator object when the
  // @@iterator function is called on it. Some browsers' implementations of the
  // iterator prototype chain incorrectly implement this, causing the Generator
  // object to not be returned from this call. This ensures that doesn't happen.
  // See https://github.com/facebook/regenerator/issues/274 for more details.

  define(Gp, iteratorSymbol, function () {
    return this;
  });
  define(Gp, "toString", function () {
    return "[object Generator]";
  });

  function pushTryEntry(locs) {
    var entry = {
      tryLoc: locs[0]
    };

    if (1 in locs) {
      entry.catchLoc = locs[1];
    }

    if (2 in locs) {
      entry.finallyLoc = locs[2];
      entry.afterLoc = locs[3];
    }

    this.tryEntries.push(entry);
  }

  function resetTryEntry(entry) {
    var record = entry.completion || {};
    record.type = "normal";
    delete record.arg;
    entry.completion = record;
  }

  function Context(tryLocsList) {
    // The root entry object (effectively a try statement without a catch
    // or a finally block) gives us a place to store values thrown from
    // locations where there is no enclosing try statement.
    this.tryEntries = [{
      tryLoc: "root"
    }];
    tryLocsList.forEach(pushTryEntry, this);
    this.reset(true);
  }

  exports.keys = function (object) {
    var keys = [];

    for (var key in object) {
      keys.push(key);
    }

    keys.reverse(); // Rather than returning an object with a next method, we keep
    // things simple and return the next function itself.

    return function next() {
      while (keys.length) {
        var key = keys.pop();

        if (key in object) {
          next.value = key;
          next.done = false;
          return next;
        }
      } // To avoid creating an additional object, we just hang the .value
      // and .done properties off the next function object itself. This
      // also ensures that the minifier will not anonymize the function.


      next.done = true;
      return next;
    };
  };

  function values(iterable) {
    if (iterable) {
      var iteratorMethod = iterable[iteratorSymbol];

      if (iteratorMethod) {
        return iteratorMethod.call(iterable);
      }

      if (typeof iterable.next === "function") {
        return iterable;
      }

      if (!isNaN(iterable.length)) {
        var i = -1,
            next = function next() {
          while (++i < iterable.length) {
            if (hasOwn.call(iterable, i)) {
              next.value = iterable[i];
              next.done = false;
              return next;
            }
          }

          next.value = undefined;
          next.done = true;
          return next;
        };

        return next.next = next;
      }
    } // Return an iterator with no values.


    return {
      next: doneResult
    };
  }

  exports.values = values;

  function doneResult() {
    return {
      value: undefined,
      done: true
    };
  }

  Context.prototype = {
    constructor: Context,
    reset: function reset(skipTempReset) {
      this.prev = 0;
      this.next = 0; // Resetting context._sent for legacy support of Babel's
      // function.sent implementation.

      this.sent = this._sent = undefined;
      this.done = false;
      this.delegate = null;
      this.method = "next";
      this.arg = undefined;
      this.tryEntries.forEach(resetTryEntry);

      if (!skipTempReset) {
        for (var name in this) {
          // Not sure about the optimal order of these conditions:
          if (name.charAt(0) === "t" && hasOwn.call(this, name) && !isNaN(+name.slice(1))) {
            this[name] = undefined;
          }
        }
      }
    },
    stop: function stop() {
      this.done = true;
      var rootEntry = this.tryEntries[0];
      var rootRecord = rootEntry.completion;

      if (rootRecord.type === "throw") {
        throw rootRecord.arg;
      }

      return this.rval;
    },
    dispatchException: function dispatchException(exception) {
      if (this.done) {
        throw exception;
      }

      var context = this;

      function handle(loc, caught) {
        record.type = "throw";
        record.arg = exception;
        context.next = loc;

        if (caught) {
          // If the dispatched exception was caught by a catch block,
          // then let that catch block handle the exception normally.
          context.method = "next";
          context.arg = undefined;
        }

        return !!caught;
      }

      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        var record = entry.completion;

        if (entry.tryLoc === "root") {
          // Exception thrown outside of any try block that could handle
          // it, so set the completion value of the entire function to
          // throw the exception.
          return handle("end");
        }

        if (entry.tryLoc <= this.prev) {
          var hasCatch = hasOwn.call(entry, "catchLoc");
          var hasFinally = hasOwn.call(entry, "finallyLoc");

          if (hasCatch && hasFinally) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            } else if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }
          } else if (hasCatch) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            }
          } else if (hasFinally) {
            if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }
          } else {
            throw new Error("try statement without catch or finally");
          }
        }
      }
    },
    abrupt: function abrupt(type, arg) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];

        if (entry.tryLoc <= this.prev && hasOwn.call(entry, "finallyLoc") && this.prev < entry.finallyLoc) {
          var finallyEntry = entry;
          break;
        }
      }

      if (finallyEntry && (type === "break" || type === "continue") && finallyEntry.tryLoc <= arg && arg <= finallyEntry.finallyLoc) {
        // Ignore the finally entry if control is not jumping to a
        // location outside the try/catch block.
        finallyEntry = null;
      }

      var record = finallyEntry ? finallyEntry.completion : {};
      record.type = type;
      record.arg = arg;

      if (finallyEntry) {
        this.method = "next";
        this.next = finallyEntry.finallyLoc;
        return ContinueSentinel;
      }

      return this.complete(record);
    },
    complete: function complete(record, afterLoc) {
      if (record.type === "throw") {
        throw record.arg;
      }

      if (record.type === "break" || record.type === "continue") {
        this.next = record.arg;
      } else if (record.type === "return") {
        this.rval = this.arg = record.arg;
        this.method = "return";
        this.next = "end";
      } else if (record.type === "normal" && afterLoc) {
        this.next = afterLoc;
      }

      return ContinueSentinel;
    },
    finish: function finish(finallyLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];

        if (entry.finallyLoc === finallyLoc) {
          this.complete(entry.completion, entry.afterLoc);
          resetTryEntry(entry);
          return ContinueSentinel;
        }
      }
    },
    "catch": function _catch(tryLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];

        if (entry.tryLoc === tryLoc) {
          var record = entry.completion;

          if (record.type === "throw") {
            var thrown = record.arg;
            resetTryEntry(entry);
          }

          return thrown;
        }
      } // The context.catch method must only be called with a location
      // argument that corresponds to a known catch block.


      throw new Error("illegal catch attempt");
    },
    delegateYield: function delegateYield(iterable, resultName, nextLoc) {
      this.delegate = {
        iterator: values(iterable),
        resultName: resultName,
        nextLoc: nextLoc
      };

      if (this.method === "next") {
        // Deliberately forget the last sent value so that we don't
        // accidentally pass it on to the delegate.
        this.arg = undefined;
      }

      return ContinueSentinel;
    }
  }; // Regardless of whether this script is executing as a CommonJS module
  // or not, return the runtime object so that we can declare the variable
  // regeneratorRuntime in the outer scope, which allows this module to be
  // injected easily by `bin/regenerator --include-runtime script.js`.

  return exports;
}( // If this script is executing as a CommonJS module, use module.exports
// as the regeneratorRuntime namespace. Otherwise create a new empty
// object. Either way, the resulting object will be used to initialize
// the regeneratorRuntime variable at the top of this file.
( false ? undefined : _typeof(module)) === "object" ? module.exports : {});

try {
  regeneratorRuntime = runtime;
} catch (accidentalStrictMode) {
  // This module should not be running in strict mode, so the above
  // assignment should always work unless something is misconfigured. Just
  // in case runtime.js accidentally runs in strict mode, in modern engines
  // we can explicitly access globalThis. In older engines we can escape
  // strict mode using a global Function call. This could conceivably fail
  // if a Content Security Policy forbids using Function, but in that case
  // the proper solution is to fix the accidental strict mode problem. If
  // you've misconfigured your bundler to force strict mode and applied a
  // CSP to forbid Function, and you're not willing to fix either of those
  // problems, please detail your unique predicament in a GitHub issue.
  if ((typeof globalThis === "undefined" ? "undefined" : _typeof(globalThis)) === "object") {
    globalThis.regeneratorRuntime = runtime;
  } else {
    Function("r", "regeneratorRuntime = r")(runtime);
  }
}
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../webpack/buildin/module.js */ "./node_modules/webpack/buildin/module.js")(module)))

/***/ }),

/***/ "./node_modules/webpack/buildin/module.js":
/*!***********************************!*\
  !*** (webpack)/buildin/module.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = function (module) {
  if (!module.webpackPolyfill) {
    module.deprecate = function () {};

    module.paths = []; // module.parent = undefined by default

    if (!module.children) module.children = [];
    Object.defineProperty(module, "loaded", {
      enumerable: true,
      get: function get() {
        return module.l;
      }
    });
    Object.defineProperty(module, "id", {
      enumerable: true,
      get: function get() {
        return module.i;
      }
    });
    module.webpackPolyfill = 1;
  }

  return module;
};

/***/ }),

/***/ "./src/js/component/carousel.js":
/*!**************************************!*\
  !*** ./src/js/component/carousel.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return initCarousel; });
/* harmony import */ var embla_carousel__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! embla-carousel */ "./node_modules/embla-carousel/embla-carousel.esm.js");

function initCarousel() {
  var emblaNode = document.querySelector('.embla');
  var options = {
    loop: true
  };

  if (emblaNode) {
    var embla = Object(embla_carousel__WEBPACK_IMPORTED_MODULE_0__["default"])(emblaNode, options);
  }
}

/***/ }),

/***/ "./src/js/component/gradient.js":
/*!**************************************!*\
  !*** ./src/js/component/gradient.js ***!
  \**************************************/
/*! exports provided: Gradient */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Gradient", function() { return Gradient; });
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

/*
*   Stripe WebGl Gradient Animation
*   All Credits to Stripe.com
*   ScrollObserver functionality to disable animation when not scrolled into view has been disabled and 
*   commented out for now.
*   https://kevinhufnagl.com
*/
//Converting colors to proper format
function normalizeColor(hexCode) {
  return [(hexCode >> 16 & 255) / 255, (hexCode >> 8 & 255) / 255, (255 & hexCode) / 255];
}

["SCREEN", "LINEAR_LIGHT"].reduce(function (hexCode, t, n) {
  return Object.assign(hexCode, _defineProperty({}, t, n));
}, {}); //Essential functionality of WebGl
//t = width
//n = height

var MiniGl = /*#__PURE__*/function () {
  function MiniGl(canvas, width, height) {
    var debug = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : false;

    _classCallCheck(this, MiniGl);

    var _miniGl = this,
        debug_output = -1 !== document.location.search.toLowerCase().indexOf("debug=webgl");

    _miniGl.canvas = canvas, _miniGl.gl = _miniGl.canvas.getContext("webgl", {
      antialias: true
    }), _miniGl.meshes = [];
    var context = _miniGl.gl;
    width && height && this.setSize(width, height), _miniGl.lastDebugMsg, _miniGl.debug = debug && debug_output ? function (e) {
      var _console;

      var t = new Date();
      t - _miniGl.lastDebugMsg > 1e3 && console.log("---"), (_console = console).log.apply(_console, [t.toLocaleTimeString() + Array(Math.max(0, 32 - e.length)).join(" ") + e + ": "].concat(_toConsumableArray(Array.from(arguments).slice(1)))), _miniGl.lastDebugMsg = t;
    } : function () {}, Object.defineProperties(_miniGl, {
      Material: {
        enumerable: false,
        value: /*#__PURE__*/function () {
          function value(vertexShaders, fragments) {
            var uniforms = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};

            _classCallCheck(this, value);

            var material = this;

            function getShaderByType(type, source) {
              var shader = context.createShader(type);
              return context.shaderSource(shader, source), context.compileShader(shader), context.getShaderParameter(shader, context.COMPILE_STATUS) || console.error(context.getShaderInfoLog(shader)), _miniGl.debug("Material.compileShaderSource", {
                source: source
              }), shader;
            }

            function getUniformVariableDeclarations(uniforms, type) {
              return Object.entries(uniforms).map(function (_ref) {
                var _ref2 = _slicedToArray(_ref, 2),
                    uniform = _ref2[0],
                    value = _ref2[1];

                return value.getDeclaration(uniform, type);
              }).join("\n");
            }

            material.uniforms = uniforms, material.uniformInstances = [];
            var prefix = "\n              precision highp float;\n            ";
            material.vertexSource = "\n              ".concat(prefix, "\n              attribute vec4 position;\n              attribute vec2 uv;\n              attribute vec2 uvNorm;\n              ").concat(getUniformVariableDeclarations(_miniGl.commonUniforms, "vertex"), "\n              ").concat(getUniformVariableDeclarations(uniforms, "vertex"), "\n              ").concat(vertexShaders, "\n            "), material.Source = "\n              ".concat(prefix, "\n              ").concat(getUniformVariableDeclarations(_miniGl.commonUniforms, "fragment"), "\n              ").concat(getUniformVariableDeclarations(uniforms, "fragment"), "\n              ").concat(fragments, "\n            "), material.vertexShader = getShaderByType(context.VERTEX_SHADER, material.vertexSource), material.fragmentShader = getShaderByType(context.FRAGMENT_SHADER, material.Source), material.program = context.createProgram(), context.attachShader(material.program, material.vertexShader), context.attachShader(material.program, material.fragmentShader), context.linkProgram(material.program), context.getProgramParameter(material.program, context.LINK_STATUS) || console.error(context.getProgramInfoLog(material.program)), context.useProgram(material.program), material.attachUniforms(void 0, _miniGl.commonUniforms), material.attachUniforms(void 0, material.uniforms);
          } //t = uniform


          _createClass(value, [{
            key: "attachUniforms",
            value: function attachUniforms(name, uniforms) {
              //n  = material
              var material = this;
              void 0 === name ? Object.entries(uniforms).forEach(function (_ref3) {
                var _ref4 = _slicedToArray(_ref3, 2),
                    name = _ref4[0],
                    uniform = _ref4[1];

                material.attachUniforms(name, uniform);
              }) : "array" == uniforms.type ? uniforms.value.forEach(function (uniform, i) {
                return material.attachUniforms("".concat(name, "[").concat(i, "]"), uniform);
              }) : "struct" == uniforms.type ? Object.entries(uniforms.value).forEach(function (_ref5) {
                var _ref6 = _slicedToArray(_ref5, 2),
                    uniform = _ref6[0],
                    i = _ref6[1];

                return material.attachUniforms("".concat(name, ".").concat(uniform), i);
              }) : (_miniGl.debug("Material.attachUniforms", {
                name: name,
                uniform: uniforms
              }), material.uniformInstances.push({
                uniform: uniforms,
                location: context.getUniformLocation(material.program, name)
              }));
            }
          }]);

          return value;
        }()
      },
      Uniform: {
        enumerable: !1,
        value: /*#__PURE__*/function () {
          function value(e) {
            _classCallCheck(this, value);

            this.type = "float", Object.assign(this, e);
            this.typeFn = {
              "float": "1f",
              "int": "1i",
              vec2: "2fv",
              vec3: "3fv",
              vec4: "4fv",
              mat4: "Matrix4fv"
            }[this.type] || "1f", this.update();
          }

          _createClass(value, [{
            key: "update",
            value: function update(_value) {
              void 0 !== this.value && context["uniform".concat(this.typeFn)](_value, 0 === this.typeFn.indexOf("Matrix") ? this.transpose : this.value, 0 === this.typeFn.indexOf("Matrix") ? this.value : null);
            } //e - name
            //t - type
            //n - length

          }, {
            key: "getDeclaration",
            value: function getDeclaration(name, type, length) {
              var uniform = this;

              if (uniform.excludeFrom !== type) {
                if ("array" === uniform.type) return uniform.value[0].getDeclaration(name, type, uniform.value.length) + "\nconst int ".concat(name, "_length = ").concat(uniform.value.length, ";");

                if ("struct" === uniform.type) {
                  var name_no_prefix = name.replace("u_", "");
                  return name_no_prefix = name_no_prefix.charAt(0).toUpperCase() + name_no_prefix.slice(1), "uniform struct ".concat(name_no_prefix, " \n                                  {\n") + Object.entries(uniform.value).map(function (_ref7) {
                    var _ref8 = _slicedToArray(_ref7, 2),
                        name = _ref8[0],
                        uniform = _ref8[1];

                    return uniform.getDeclaration(name, type).replace(/^uniform/, "");
                  }).join("") + "\n} ".concat(name).concat(length > 0 ? "[".concat(length, "]") : "", ";");
                }

                return "uniform ".concat(uniform.type, " ").concat(name).concat(length > 0 ? "[".concat(length, "]") : "", ";");
              }
            }
          }]);

          return value;
        }()
      },
      PlaneGeometry: {
        enumerable: !1,
        value: /*#__PURE__*/function () {
          function value(width, height, n, i, orientation) {
            _classCallCheck(this, value);

            context.createBuffer(), this.attributes = {
              position: new _miniGl.Attribute({
                target: context.ARRAY_BUFFER,
                size: 3
              }),
              uv: new _miniGl.Attribute({
                target: context.ARRAY_BUFFER,
                size: 2
              }),
              uvNorm: new _miniGl.Attribute({
                target: context.ARRAY_BUFFER,
                size: 2
              }),
              index: new _miniGl.Attribute({
                target: context.ELEMENT_ARRAY_BUFFER,
                size: 3,
                type: context.UNSIGNED_SHORT
              })
            }, this.setTopology(n, i), this.setSize(width, height, orientation);
          }

          _createClass(value, [{
            key: "setTopology",
            value: function setTopology() {
              var e = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 1;
              var t = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 1;
              var n = this;
              n.xSegCount = e, n.ySegCount = t, n.vertexCount = (n.xSegCount + 1) * (n.ySegCount + 1), n.quadCount = n.xSegCount * n.ySegCount * 2, n.attributes.uv.values = new Float32Array(2 * n.vertexCount), n.attributes.uvNorm.values = new Float32Array(2 * n.vertexCount), n.attributes.index.values = new Uint16Array(3 * n.quadCount);

              for (var _e2 = 0; _e2 <= n.ySegCount; _e2++) {
                for (var _t = 0; _t <= n.xSegCount; _t++) {
                  var i = _e2 * (n.xSegCount + 1) + _t;

                  if (n.attributes.uv.values[2 * i] = _t / n.xSegCount, n.attributes.uv.values[2 * i + 1] = 1 - _e2 / n.ySegCount, n.attributes.uvNorm.values[2 * i] = _t / n.xSegCount * 2 - 1, n.attributes.uvNorm.values[2 * i + 1] = 1 - _e2 / n.ySegCount * 2, _t < n.xSegCount && _e2 < n.ySegCount) {
                    var s = _e2 * n.xSegCount + _t;
                    n.attributes.index.values[6 * s] = i, n.attributes.index.values[6 * s + 1] = i + 1 + n.xSegCount, n.attributes.index.values[6 * s + 2] = i + 1, n.attributes.index.values[6 * s + 3] = i + 1, n.attributes.index.values[6 * s + 4] = i + 1 + n.xSegCount, n.attributes.index.values[6 * s + 5] = i + 2 + n.xSegCount;
                  }
                }
              }

              n.attributes.uv.update(), n.attributes.uvNorm.update(), n.attributes.index.update(), _miniGl.debug("Geometry.setTopology", {
                uv: n.attributes.uv,
                uvNorm: n.attributes.uvNorm,
                index: n.attributes.index
              });
            }
          }, {
            key: "setSize",
            value: function setSize() {
              var width = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 1;
              var height = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 1;
              var orientation = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : "xz";
              var geometry = this;
              geometry.width = width, geometry.height = height, geometry.orientation = orientation, geometry.attributes.position.values && geometry.attributes.position.values.length === 3 * geometry.vertexCount || (geometry.attributes.position.values = new Float32Array(3 * geometry.vertexCount));
              var o = width / -2,
                  r = height / -2,
                  segment_width = width / geometry.xSegCount,
                  segment_height = height / geometry.ySegCount;

              for (var yIndex = 0; yIndex <= geometry.ySegCount; yIndex++) {
                var t = r + yIndex * segment_height;

                for (var xIndex = 0; xIndex <= geometry.xSegCount; xIndex++) {
                  var _r = o + xIndex * segment_width,
                      l = yIndex * (geometry.xSegCount + 1) + xIndex;

                  geometry.attributes.position.values[3 * l + "xyz".indexOf(orientation[0])] = _r, geometry.attributes.position.values[3 * l + "xyz".indexOf(orientation[1])] = -t;
                }
              }

              geometry.attributes.position.update(), _miniGl.debug("Geometry.setSize", {
                position: geometry.attributes.position
              });
            }
          }]);

          return value;
        }()
      },
      Mesh: {
        enumerable: !1,
        value: /*#__PURE__*/function () {
          function value(geometry, material) {
            _classCallCheck(this, value);

            var mesh = this;
            mesh.geometry = geometry, mesh.material = material, mesh.wireframe = !1, mesh.attributeInstances = [], Object.entries(mesh.geometry.attributes).forEach(function (_ref9) {
              var _ref10 = _slicedToArray(_ref9, 2),
                  e = _ref10[0],
                  attribute = _ref10[1];

              mesh.attributeInstances.push({
                attribute: attribute,
                location: attribute.attach(e, mesh.material.program)
              });
            }), _miniGl.meshes.push(mesh), _miniGl.debug("Mesh.constructor", {
              mesh: mesh
            });
          }

          _createClass(value, [{
            key: "draw",
            value: function draw() {
              context.useProgram(this.material.program), this.material.uniformInstances.forEach(function (_ref11) {
                var e = _ref11.uniform,
                    t = _ref11.location;
                return e.update(t);
              }), this.attributeInstances.forEach(function (_ref12) {
                var e = _ref12.attribute,
                    t = _ref12.location;
                return e.use(t);
              }), context.drawElements(this.wireframe ? context.LINES : context.TRIANGLES, this.geometry.attributes.index.values.length, context.UNSIGNED_SHORT, 0);
            }
          }, {
            key: "remove",
            value: function remove() {
              var _this = this;

              _miniGl.meshes = _miniGl.meshes.filter(function (e) {
                return e != _this;
              });
            }
          }]);

          return value;
        }()
      },
      Attribute: {
        enumerable: !1,
        value: /*#__PURE__*/function () {
          function value(e) {
            _classCallCheck(this, value);

            this.type = context.FLOAT, this.normalized = !1, this.buffer = context.createBuffer(), Object.assign(this, e), this.update();
          }

          _createClass(value, [{
            key: "update",
            value: function update() {
              void 0 !== this.values && (context.bindBuffer(this.target, this.buffer), context.bufferData(this.target, this.values, context.STATIC_DRAW));
            }
          }, {
            key: "attach",
            value: function attach(e, t) {
              var n = context.getAttribLocation(t, e);
              return this.target === context.ARRAY_BUFFER && (context.enableVertexAttribArray(n), context.vertexAttribPointer(n, this.size, this.type, this.normalized, 0, 0)), n;
            }
          }, {
            key: "use",
            value: function use(e) {
              context.bindBuffer(this.target, this.buffer), this.target === context.ARRAY_BUFFER && (context.enableVertexAttribArray(e), context.vertexAttribPointer(e, this.size, this.type, this.normalized, 0, 0));
            }
          }]);

          return value;
        }()
      }
    });
    var a = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1];
    _miniGl.commonUniforms = {
      projectionMatrix: new _miniGl.Uniform({
        type: "mat4",
        value: a
      }),
      modelViewMatrix: new _miniGl.Uniform({
        type: "mat4",
        value: a
      }),
      resolution: new _miniGl.Uniform({
        type: "vec2",
        value: [1, 1]
      }),
      aspectRatio: new _miniGl.Uniform({
        type: "float",
        value: 1
      })
    };
  }

  _createClass(MiniGl, [{
    key: "setSize",
    value: function setSize() {
      var e = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 640;
      var t = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 480;
      this.width = e, this.height = t, this.canvas.width = e, this.canvas.height = t, this.gl.viewport(0, 0, e, t), this.commonUniforms.resolution.value = [e, t], this.commonUniforms.aspectRatio.value = e / t, this.debug("MiniGL.setSize", {
        width: e,
        height: t
      });
    } //left, right, top, bottom, near, far

  }, {
    key: "setOrthographicCamera",
    value: function setOrthographicCamera() {
      var e = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;
      var t = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;
      var n = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 0;
      var i = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : -2e3;
      var s = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : 2e3;
      this.commonUniforms.projectionMatrix.value = [2 / this.width, 0, 0, 0, 0, 2 / this.height, 0, 0, 0, 0, 2 / (i - s), 0, e, t, n, 1], this.debug("setOrthographicCamera", this.commonUniforms.projectionMatrix.value);
    }
  }, {
    key: "render",
    value: function render() {
      this.gl.clearColor(0, 0, 0, 0), this.gl.clearDepth(1), this.meshes.forEach(function (e) {
        return e.draw();
      });
    }
  }]);

  return MiniGl;
}(); //Sets initial properties


function e(object, propertyName, val) {
  return propertyName in object ? Object.defineProperty(object, propertyName, {
    value: val,
    enumerable: !0,
    configurable: !0,
    writable: !0
  }) : object[propertyName] = val, object;
} //Gradient object


var Gradient = /*#__PURE__*/function () {
  function Gradient() {
    var _this2 = this;

    _classCallCheck(this, Gradient);

    e(this, "el", void 0), e(this, "cssVarRetries", 0), e(this, "maxCssVarRetries", 200), e(this, "angle", 0), e(this, "isLoadedClass", !1), e(this, "isScrolling", !1),
    /*e(this, "isStatic", o.disableAmbientAnimations()),*/
    e(this, "scrollingTimeout", void 0), e(this, "scrollingRefreshDelay", 200), e(this, "isIntersecting", !1), e(this, "shaderFiles", void 0), e(this, "vertexShader", void 0), e(this, "sectionColors", void 0), e(this, "computedCanvasStyle", void 0), e(this, "conf", void 0), e(this, "uniforms", void 0), e(this, "t", 1253106), e(this, "last", 0), e(this, "width", void 0), e(this, "minWidth", 1111), e(this, "height", 600), e(this, "xSegCount", void 0), e(this, "ySegCount", void 0), e(this, "mesh", void 0), e(this, "material", void 0), e(this, "geometry", void 0), e(this, "minigl", void 0), e(this, "scrollObserver", void 0), e(this, "amp", 320), e(this, "seed", 5), e(this, "freqX", 14e-5), e(this, "freqY", 29e-5), e(this, "freqDelta", 1e-5), e(this, "activeColors", [1, 1, 1, 1]), e(this, "isMetaKey", !1), e(this, "isGradientLegendVisible", !1), e(this, "isMouseDown", !1), e(this, "handleScroll", function () {
      clearTimeout(_this2.scrollingTimeout), _this2.scrollingTimeout = setTimeout(_this2.handleScrollEnd, _this2.scrollingRefreshDelay), _this2.isGradientLegendVisible && _this2.hideGradientLegend(), _this2.conf.playing && (_this2.isScrolling = !0, _this2.pause());
    }), e(this, "handleScrollEnd", function () {
      _this2.isScrolling = !1, _this2.isIntersecting && _this2.play();
    }), e(this, "resize", function () {
      _this2.width = window.innerWidth, _this2.minigl.setSize(_this2.width, _this2.height), _this2.minigl.setOrthographicCamera(), _this2.xSegCount = Math.ceil(_this2.width * _this2.conf.density[0]), _this2.ySegCount = Math.ceil(_this2.height * _this2.conf.density[1]), _this2.mesh.geometry.setTopology(_this2.xSegCount, _this2.ySegCount), _this2.mesh.geometry.setSize(_this2.width, _this2.height), _this2.mesh.material.uniforms.u_shadow_power.value = _this2.width < 600 ? 5 : 6;
    }), e(this, "handleMouseDown", function (e) {
      _this2.isGradientLegendVisible && (_this2.isMetaKey = e.metaKey, _this2.isMouseDown = !0, !1 === _this2.conf.playing && requestAnimationFrame(_this2.animate));
    }), e(this, "handleMouseUp", function () {
      _this2.isMouseDown = !1;
    }), e(this, "animate", function (e) {
      if (!_this2.shouldSkipFrame(e) || _this2.isMouseDown) {
        if (_this2.t += Math.min(e - _this2.last, 1e3 / 15), _this2.last = e, _this2.isMouseDown) {
          var _e3 = 160;
          _this2.isMetaKey && (_e3 = -160), _this2.t += _e3;
        }

        _this2.mesh.material.uniforms.u_time.value = _this2.t, _this2.minigl.render();
      }

      if (0 !== _this2.last && _this2.isStatic) return _this2.minigl.render(), void _this2.disconnect();
      (
      /*this.isIntersecting && */
      _this2.conf.playing || _this2.isMouseDown) && requestAnimationFrame(_this2.animate);
    }), e(this, "addIsLoadedClass", function () {
      /*this.isIntersecting && */
      !_this2.isLoadedClass && (_this2.isLoadedClass = !0, _this2.el.classList.add("isLoaded"), setTimeout(function () {
        _this2.el.parentElement.classList.add("isLoaded");
      }, 3e3));
    }), e(this, "pause", function () {
      _this2.conf.playing = false;
    }), e(this, "play", function () {
      requestAnimationFrame(_this2.animate), _this2.conf.playing = true;
    }), e(this, "initGradient", function (selector) {
      _this2.el = document.querySelector(selector);

      _this2.connect();

      return _this2;
    });
  }

  _createClass(Gradient, [{
    key: "connect",
    value: function () {
      var _connect = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee() {
        var _this3 = this;

        return regeneratorRuntime.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                this.shaderFiles = {
                  vertex: "varying vec3 v_color;\n\nvoid main() {\n  float time = u_time * u_global.noiseSpeed;\n\n  vec2 noiseCoord = resolution * uvNorm * u_global.noiseFreq;\n\n  vec2 st = 1. - uvNorm.xy;\n\n  //\n  // Tilting the plane\n  //\n\n  // Front-to-back tilt\n  float tilt = resolution.y / 2.0 * uvNorm.y;\n\n  // Left-to-right angle\n  float incline = resolution.x * uvNorm.x / 2.0 * u_vertDeform.incline;\n\n  // Up-down shift to offset incline\n  float offset = resolution.x / 2.0 * u_vertDeform.incline * mix(u_vertDeform.offsetBottom, u_vertDeform.offsetTop, uv.y);\n\n  //\n  // Vertex noise\n  //\n\n  float noise = snoise(vec3(\n    noiseCoord.x * u_vertDeform.noiseFreq.x + time * u_vertDeform.noiseFlow,\n    noiseCoord.y * u_vertDeform.noiseFreq.y,\n    time * u_vertDeform.noiseSpeed + u_vertDeform.noiseSeed\n  )) * u_vertDeform.noiseAmp;\n\n  // Fade noise to zero at edges\n  noise *= 1.0 - pow(abs(uvNorm.y), 2.0);\n\n  // Clamp to 0\n  noise = max(0.0, noise);\n\n  vec3 pos = vec3(\n    position.x,\n    position.y + tilt + incline + noise - offset,\n    position.z\n  );\n\n  //\n  // Vertex color, to be passed to fragment shader\n  //\n\n  if (u_active_colors[0] == 1.) {\n    v_color = u_baseColor;\n  }\n\n  for (int i = 0; i < u_waveLayers_length; i++) {\n    if (u_active_colors[i + 1] == 1.) {\n      WaveLayers layer = u_waveLayers[i];\n\n      float noise = smoothstep(\n        layer.noiseFloor,\n        layer.noiseCeil,\n        snoise(vec3(\n          noiseCoord.x * layer.noiseFreq.x + time * layer.noiseFlow,\n          noiseCoord.y * layer.noiseFreq.y,\n          time * layer.noiseSpeed + layer.noiseSeed\n        )) / 2.0 + 0.5\n      );\n\n      v_color = blendNormal(v_color, layer.color, pow(noise, 4.));\n    }\n  }\n\n  //\n  // Finish\n  //\n\n  gl_Position = projectionMatrix * modelViewMatrix * vec4(pos, 1.0);\n}",
                  noise: "//\n// Description : Array and textureless GLSL 2D/3D/4D simplex\n//               noise functions.\n//      Author : Ian McEwan, Ashima Arts.\n//  Maintainer : stegu\n//     Lastmod : 20110822 (ijm)\n//     License : Copyright (C) 2011 Ashima Arts. All rights reserved.\n//               Distributed under the MIT License. See LICENSE file.\n//               https://github.com/ashima/webgl-noise\n//               https://github.com/stegu/webgl-noise\n//\n\nvec3 mod289(vec3 x) {\n  return x - floor(x * (1.0 / 289.0)) * 289.0;\n}\n\nvec4 mod289(vec4 x) {\n  return x - floor(x * (1.0 / 289.0)) * 289.0;\n}\n\nvec4 permute(vec4 x) {\n    return mod289(((x*34.0)+1.0)*x);\n}\n\nvec4 taylorInvSqrt(vec4 r)\n{\n  return 1.79284291400159 - 0.85373472095314 * r;\n}\n\nfloat snoise(vec3 v)\n{\n  const vec2  C = vec2(1.0/6.0, 1.0/3.0) ;\n  const vec4  D = vec4(0.0, 0.5, 1.0, 2.0);\n\n// First corner\n  vec3 i  = floor(v + dot(v, C.yyy) );\n  vec3 x0 =   v - i + dot(i, C.xxx) ;\n\n// Other corners\n  vec3 g = step(x0.yzx, x0.xyz);\n  vec3 l = 1.0 - g;\n  vec3 i1 = min( g.xyz, l.zxy );\n  vec3 i2 = max( g.xyz, l.zxy );\n\n  //   x0 = x0 - 0.0 + 0.0 * C.xxx;\n  //   x1 = x0 - i1  + 1.0 * C.xxx;\n  //   x2 = x0 - i2  + 2.0 * C.xxx;\n  //   x3 = x0 - 1.0 + 3.0 * C.xxx;\n  vec3 x1 = x0 - i1 + C.xxx;\n  vec3 x2 = x0 - i2 + C.yyy; // 2.0*C.x = 1/3 = C.y\n  vec3 x3 = x0 - D.yyy;      // -1.0+3.0*C.x = -0.5 = -D.y\n\n// Permutations\n  i = mod289(i);\n  vec4 p = permute( permute( permute(\n            i.z + vec4(0.0, i1.z, i2.z, 1.0 ))\n          + i.y + vec4(0.0, i1.y, i2.y, 1.0 ))\n          + i.x + vec4(0.0, i1.x, i2.x, 1.0 ));\n\n// Gradients: 7x7 points over a square, mapped onto an octahedron.\n// The ring size 17*17 = 289 is close to a multiple of 49 (49*6 = 294)\n  float n_ = 0.142857142857; // 1.0/7.0\n  vec3  ns = n_ * D.wyz - D.xzx;\n\n  vec4 j = p - 49.0 * floor(p * ns.z * ns.z);  //  mod(p,7*7)\n\n  vec4 x_ = floor(j * ns.z);\n  vec4 y_ = floor(j - 7.0 * x_ );    // mod(j,N)\n\n  vec4 x = x_ *ns.x + ns.yyyy;\n  vec4 y = y_ *ns.x + ns.yyyy;\n  vec4 h = 1.0 - abs(x) - abs(y);\n\n  vec4 b0 = vec4( x.xy, y.xy );\n  vec4 b1 = vec4( x.zw, y.zw );\n\n  //vec4 s0 = vec4(lessThan(b0,0.0))*2.0 - 1.0;\n  //vec4 s1 = vec4(lessThan(b1,0.0))*2.0 - 1.0;\n  vec4 s0 = floor(b0)*2.0 + 1.0;\n  vec4 s1 = floor(b1)*2.0 + 1.0;\n  vec4 sh = -step(h, vec4(0.0));\n\n  vec4 a0 = b0.xzyw + s0.xzyw*sh.xxyy ;\n  vec4 a1 = b1.xzyw + s1.xzyw*sh.zzww ;\n\n  vec3 p0 = vec3(a0.xy,h.x);\n  vec3 p1 = vec3(a0.zw,h.y);\n  vec3 p2 = vec3(a1.xy,h.z);\n  vec3 p3 = vec3(a1.zw,h.w);\n\n//Normalise gradients\n  vec4 norm = taylorInvSqrt(vec4(dot(p0,p0), dot(p1,p1), dot(p2, p2), dot(p3,p3)));\n  p0 *= norm.x;\n  p1 *= norm.y;\n  p2 *= norm.z;\n  p3 *= norm.w;\n\n// Mix final noise value\n  vec4 m = max(0.6 - vec4(dot(x0,x0), dot(x1,x1), dot(x2,x2), dot(x3,x3)), 0.0);\n  m = m * m;\n  return 42.0 * dot( m*m, vec4( dot(p0,x0), dot(p1,x1),\n                                dot(p2,x2), dot(p3,x3) ) );\n}",
                  blend: "//\n// https://github.com/jamieowen/glsl-blend\n//\n\n// Normal\n\nvec3 blendNormal(vec3 base, vec3 blend) {\n\treturn blend;\n}\n\nvec3 blendNormal(vec3 base, vec3 blend, float opacity) {\n\treturn (blendNormal(base, blend) * opacity + base * (1.0 - opacity));\n}\n\n// Screen\n\nfloat blendScreen(float base, float blend) {\n\treturn 1.0-((1.0-base)*(1.0-blend));\n}\n\nvec3 blendScreen(vec3 base, vec3 blend) {\n\treturn vec3(blendScreen(base.r,blend.r),blendScreen(base.g,blend.g),blendScreen(base.b,blend.b));\n}\n\nvec3 blendScreen(vec3 base, vec3 blend, float opacity) {\n\treturn (blendScreen(base, blend) * opacity + base * (1.0 - opacity));\n}\n\n// Multiply\n\nvec3 blendMultiply(vec3 base, vec3 blend) {\n\treturn base*blend;\n}\n\nvec3 blendMultiply(vec3 base, vec3 blend, float opacity) {\n\treturn (blendMultiply(base, blend) * opacity + base * (1.0 - opacity));\n}\n\n// Overlay\n\nfloat blendOverlay(float base, float blend) {\n\treturn base<0.5?(2.0*base*blend):(1.0-2.0*(1.0-base)*(1.0-blend));\n}\n\nvec3 blendOverlay(vec3 base, vec3 blend) {\n\treturn vec3(blendOverlay(base.r,blend.r),blendOverlay(base.g,blend.g),blendOverlay(base.b,blend.b));\n}\n\nvec3 blendOverlay(vec3 base, vec3 blend, float opacity) {\n\treturn (blendOverlay(base, blend) * opacity + base * (1.0 - opacity));\n}\n\n// Hard light\n\nvec3 blendHardLight(vec3 base, vec3 blend) {\n\treturn blendOverlay(blend,base);\n}\n\nvec3 blendHardLight(vec3 base, vec3 blend, float opacity) {\n\treturn (blendHardLight(base, blend) * opacity + base * (1.0 - opacity));\n}\n\n// Soft light\n\nfloat blendSoftLight(float base, float blend) {\n\treturn (blend<0.5)?(2.0*base*blend+base*base*(1.0-2.0*blend)):(sqrt(base)*(2.0*blend-1.0)+2.0*base*(1.0-blend));\n}\n\nvec3 blendSoftLight(vec3 base, vec3 blend) {\n\treturn vec3(blendSoftLight(base.r,blend.r),blendSoftLight(base.g,blend.g),blendSoftLight(base.b,blend.b));\n}\n\nvec3 blendSoftLight(vec3 base, vec3 blend, float opacity) {\n\treturn (blendSoftLight(base, blend) * opacity + base * (1.0 - opacity));\n}\n\n// Color dodge\n\nfloat blendColorDodge(float base, float blend) {\n\treturn (blend==1.0)?blend:min(base/(1.0-blend),1.0);\n}\n\nvec3 blendColorDodge(vec3 base, vec3 blend) {\n\treturn vec3(blendColorDodge(base.r,blend.r),blendColorDodge(base.g,blend.g),blendColorDodge(base.b,blend.b));\n}\n\nvec3 blendColorDodge(vec3 base, vec3 blend, float opacity) {\n\treturn (blendColorDodge(base, blend) * opacity + base * (1.0 - opacity));\n}\n\n// Color burn\n\nfloat blendColorBurn(float base, float blend) {\n\treturn (blend==0.0)?blend:max((1.0-((1.0-base)/blend)),0.0);\n}\n\nvec3 blendColorBurn(vec3 base, vec3 blend) {\n\treturn vec3(blendColorBurn(base.r,blend.r),blendColorBurn(base.g,blend.g),blendColorBurn(base.b,blend.b));\n}\n\nvec3 blendColorBurn(vec3 base, vec3 blend, float opacity) {\n\treturn (blendColorBurn(base, blend) * opacity + base * (1.0 - opacity));\n}\n\n// Vivid Light\n\nfloat blendVividLight(float base, float blend) {\n\treturn (blend<0.5)?blendColorBurn(base,(2.0*blend)):blendColorDodge(base,(2.0*(blend-0.5)));\n}\n\nvec3 blendVividLight(vec3 base, vec3 blend) {\n\treturn vec3(blendVividLight(base.r,blend.r),blendVividLight(base.g,blend.g),blendVividLight(base.b,blend.b));\n}\n\nvec3 blendVividLight(vec3 base, vec3 blend, float opacity) {\n\treturn (blendVividLight(base, blend) * opacity + base * (1.0 - opacity));\n}\n\n// Lighten\n\nfloat blendLighten(float base, float blend) {\n\treturn max(blend,base);\n}\n\nvec3 blendLighten(vec3 base, vec3 blend) {\n\treturn vec3(blendLighten(base.r,blend.r),blendLighten(base.g,blend.g),blendLighten(base.b,blend.b));\n}\n\nvec3 blendLighten(vec3 base, vec3 blend, float opacity) {\n\treturn (blendLighten(base, blend) * opacity + base * (1.0 - opacity));\n}\n\n// Linear burn\n\nfloat blendLinearBurn(float base, float blend) {\n\t// Note : Same implementation as BlendSubtractf\n\treturn max(base+blend-1.0,0.0);\n}\n\nvec3 blendLinearBurn(vec3 base, vec3 blend) {\n\t// Note : Same implementation as BlendSubtract\n\treturn max(base+blend-vec3(1.0),vec3(0.0));\n}\n\nvec3 blendLinearBurn(vec3 base, vec3 blend, float opacity) {\n\treturn (blendLinearBurn(base, blend) * opacity + base * (1.0 - opacity));\n}\n\n// Linear dodge\n\nfloat blendLinearDodge(float base, float blend) {\n\t// Note : Same implementation as BlendAddf\n\treturn min(base+blend,1.0);\n}\n\nvec3 blendLinearDodge(vec3 base, vec3 blend) {\n\t// Note : Same implementation as BlendAdd\n\treturn min(base+blend,vec3(1.0));\n}\n\nvec3 blendLinearDodge(vec3 base, vec3 blend, float opacity) {\n\treturn (blendLinearDodge(base, blend) * opacity + base * (1.0 - opacity));\n}\n\n// Linear light\n\nfloat blendLinearLight(float base, float blend) {\n\treturn blend<0.5?blendLinearBurn(base,(2.0*blend)):blendLinearDodge(base,(2.0*(blend-0.5)));\n}\n\nvec3 blendLinearLight(vec3 base, vec3 blend) {\n\treturn vec3(blendLinearLight(base.r,blend.r),blendLinearLight(base.g,blend.g),blendLinearLight(base.b,blend.b));\n}\n\nvec3 blendLinearLight(vec3 base, vec3 blend, float opacity) {\n\treturn (blendLinearLight(base, blend) * opacity + base * (1.0 - opacity));\n}",
                  fragment: "varying vec3 v_color;\n\nvoid main() {\n  vec3 color = v_color;\n  if (u_darken_top == 1.0) {\n    vec2 st = gl_FragCoord.xy/resolution.xy;\n    color.g -= pow(st.y + sin(-12.0) * st.x, u_shadow_power) * 0.4;\n  }\n  gl_FragColor = vec4(color, 1.0);\n}"
                }, this.conf = {
                  presetName: "",
                  wireframe: false,
                  density: [.06, .16],
                  zoom: 1,
                  rotation: 0,
                  playing: true
                }, document.querySelectorAll("canvas").length < 1 ? console.log("DID NOT LOAD HERO STRIPE CANVAS") : (this.minigl = new MiniGl(this.el, null, null, !0), requestAnimationFrame(function () {
                  _this3.el && (_this3.computedCanvasStyle = getComputedStyle(_this3.el), _this3.waitForCssVars());
                })
                /*
                this.scrollObserver = await s.create(.1, !1),
                this.scrollObserver.observe(this.el),
                this.scrollObserver.onSeparate(() => {
                    window.removeEventListener("scroll", this.handleScroll), window.removeEventListener("mousedown", this.handleMouseDown), window.removeEventListener("mouseup", this.handleMouseUp), window.removeEventListener("keydown", this.handleKeyDown), this.isIntersecting = !1, this.conf.playing && this.pause()
                }), 
                this.scrollObserver.onIntersect(() => {
                    window.addEventListener("scroll", this.handleScroll), window.addEventListener("mousedown", this.handleMouseDown), window.addEventListener("mouseup", this.handleMouseUp), window.addEventListener("keydown", this.handleKeyDown), this.isIntersecting = !0, this.addIsLoadedClass(), this.play()
                })*/
                );

              case 1:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      }));

      function connect() {
        return _connect.apply(this, arguments);
      }

      return connect;
    }()
  }, {
    key: "disconnect",
    value: function disconnect() {
      this.scrollObserver && (window.removeEventListener("scroll", this.handleScroll), window.removeEventListener("mousedown", this.handleMouseDown), window.removeEventListener("mouseup", this.handleMouseUp), window.removeEventListener("keydown", this.handleKeyDown), this.scrollObserver.disconnect()), window.removeEventListener("resize", this.resize);
    }
  }, {
    key: "initMaterial",
    value: function initMaterial() {
      this.uniforms = {
        u_time: new this.minigl.Uniform({
          value: 0
        }),
        u_shadow_power: new this.minigl.Uniform({
          value: 5
        }),
        u_darken_top: new this.minigl.Uniform({
          value: "" === this.el.dataset.jsDarkenTop ? 1 : 0
        }),
        u_active_colors: new this.minigl.Uniform({
          value: this.activeColors,
          type: "vec4"
        }),
        u_global: new this.minigl.Uniform({
          value: {
            noiseFreq: new this.minigl.Uniform({
              value: [this.freqX, this.freqY],
              type: "vec2"
            }),
            noiseSpeed: new this.minigl.Uniform({
              value: 5e-6
            })
          },
          type: "struct"
        }),
        u_vertDeform: new this.minigl.Uniform({
          value: {
            incline: new this.minigl.Uniform({
              value: Math.sin(this.angle) / Math.cos(this.angle)
            }),
            offsetTop: new this.minigl.Uniform({
              value: -.5
            }),
            offsetBottom: new this.minigl.Uniform({
              value: -.5
            }),
            noiseFreq: new this.minigl.Uniform({
              value: [3, 4],
              type: "vec2"
            }),
            noiseAmp: new this.minigl.Uniform({
              value: this.amp
            }),
            noiseSpeed: new this.minigl.Uniform({
              value: 10
            }),
            noiseFlow: new this.minigl.Uniform({
              value: 3
            }),
            noiseSeed: new this.minigl.Uniform({
              value: this.seed
            })
          },
          type: "struct",
          excludeFrom: "fragment"
        }),
        u_baseColor: new this.minigl.Uniform({
          value: this.sectionColors[0],
          type: "vec3",
          excludeFrom: "fragment"
        }),
        u_waveLayers: new this.minigl.Uniform({
          value: [],
          excludeFrom: "fragment",
          type: "array"
        })
      };

      for (var _e4 = 1; _e4 < this.sectionColors.length; _e4 += 1) {
        this.uniforms.u_waveLayers.value.push(new this.minigl.Uniform({
          value: {
            color: new this.minigl.Uniform({
              value: this.sectionColors[_e4],
              type: "vec3"
            }),
            noiseFreq: new this.minigl.Uniform({
              value: [2 + _e4 / this.sectionColors.length, 3 + _e4 / this.sectionColors.length],
              type: "vec2"
            }),
            noiseSpeed: new this.minigl.Uniform({
              value: 11 + .3 * _e4
            }),
            noiseFlow: new this.minigl.Uniform({
              value: 6.5 + .3 * _e4
            }),
            noiseSeed: new this.minigl.Uniform({
              value: this.seed + 10 * _e4
            }),
            noiseFloor: new this.minigl.Uniform({
              value: .1
            }),
            noiseCeil: new this.minigl.Uniform({
              value: .63 + .07 * _e4
            })
          },
          type: "struct"
        }));
      }

      return this.vertexShader = [this.shaderFiles.noise, this.shaderFiles.blend, this.shaderFiles.vertex].join("\n\n"), new this.minigl.Material(this.vertexShader, this.shaderFiles.fragment, this.uniforms);
    }
  }, {
    key: "initMesh",
    value: function initMesh() {
      this.material = this.initMaterial(), this.geometry = new this.minigl.PlaneGeometry(), this.mesh = new this.minigl.Mesh(this.geometry, this.material);
    }
  }, {
    key: "shouldSkipFrame",
    value: function shouldSkipFrame(e) {
      return !!window.document.hidden || !this.conf.playing || parseInt(e, 10) % 2 == 0 || void 0;
    }
  }, {
    key: "updateFrequency",
    value: function updateFrequency(e) {
      this.freqX += e, this.freqY += e;
    }
  }, {
    key: "toggleColor",
    value: function toggleColor(index) {
      this.activeColors[index] = 0 === this.activeColors[index] ? 1 : 0;
    }
  }, {
    key: "showGradientLegend",
    value: function showGradientLegend() {
      this.width > this.minWidth && (this.isGradientLegendVisible = !0, document.body.classList.add("isGradientLegendVisible"));
    }
  }, {
    key: "hideGradientLegend",
    value: function hideGradientLegend() {
      this.isGradientLegendVisible = !1, document.body.classList.remove("isGradientLegendVisible");
    }
  }, {
    key: "init",
    value: function init() {
      this.initGradientColors(), this.initMesh(), this.resize(), requestAnimationFrame(this.animate), window.addEventListener("resize", this.resize);
    }
    /*
    * Waiting for the css variables to become available, usually on page load before we can continue.
    * Using default colors assigned below if no variables have been found after maxCssVarRetries
    */

  }, {
    key: "waitForCssVars",
    value: function waitForCssVars() {
      var _this4 = this;

      if (this.computedCanvasStyle && -1 !== this.computedCanvasStyle.getPropertyValue("--gradient-color-1").indexOf("#")) this.init(), this.addIsLoadedClass();else {
        if (this.cssVarRetries += 1, this.cssVarRetries > this.maxCssVarRetries) {
          return this.sectionColors = [16711680, 16711680, 16711935, 65280, 255], void this.init();
        }

        requestAnimationFrame(function () {
          return _this4.waitForCssVars();
        });
      }
    }
    /*
    * Initializes the four section colors by retrieving them from css variables.
    */

  }, {
    key: "initGradientColors",
    value: function initGradientColors() {
      var _this5 = this;

      this.sectionColors = ["--gradient-color-1", "--gradient-color-2", "--gradient-color-3", "--gradient-color-4"].map(function (cssPropertyName) {
        var hex = _this5.computedCanvasStyle.getPropertyValue(cssPropertyName).trim(); //Check if shorthand hex value was used and double the length so the conversion in normalizeColor will work.


        if (4 === hex.length) {
          var hexTemp = hex.substr(1).split("").map(function (hexTemp) {
            return hexTemp + hexTemp;
          }).join("");
          hex = "#".concat(hexTemp);
        }

        return hex && "0x".concat(hex.substr(1));
      }).filter(Boolean).map(normalizeColor);
    }
  }]);

  return Gradient;
}();
/*
*Finally initializing the Gradient class, assigning a canvas to it and calling Gradient.connect() which initializes everything,
* Use Gradient.pause() and Gradient.play() for controls.
*
* Here are some default property values you can change anytime:
* Amplitude:    Gradient.amp = 0
* Colors:       Gradient.sectionColors (if you change colors, use normalizeColor(#hexValue)) before you assign it.
*
*
* Useful functions
* Gradient.toggleColor(index)
* Gradient.updateFrequency(freq)
*/




/***/ }),

/***/ "./src/js/component/modal.js":
/*!***********************************!*\
  !*** ./src/js/component/modal.js ***!
  \***********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return menuModalInit; });
/* harmony import */ var micromodal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! micromodal */ "./node_modules/micromodal/dist/micromodal.es.js");

function menuModalInit() {
  micromodal__WEBPACK_IMPORTED_MODULE_0__["default"].init({
    onShow: function onShow(modal) {
      return console.info("".concat(modal.id, " is shown"));
    },
    // [1]
    onClose: function onClose(modal) {
      return console.info("".concat(modal.id, " is hidden"));
    },
    // [2]
    //openTrigger: 'data-custom-open', // [3]
    //closeTrigger: 'data-custom-close', // [4]
    openClass: 'is-open',
    // [5]
    disableScroll: true,
    // [6]
    disableFocus: false,
    // [7]
    awaitOpenAnimation: false,
    // [8]
    awaitCloseAnimation: false,
    // [9]
    debugMode: true // [10]

  });
}

/***/ }),

/***/ "./src/js/component/stickyNav.js":
/*!***************************************!*\
  !*** ./src/js/component/stickyNav.js ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return initStickyNav; });
function initStickyNav() {
  var body = document.body;
  var lastScroll = 0;

  window.onscroll = function () {
    var currentScroll = window.pageYOffset;

    if (currentScroll <= 0) {
      body.classList.remove('sUp');
      return;
    }

    if (currentScroll > lastScroll && !body.classList.contains('sDown')) {
      // down
      body.classList.remove('sUp');
      body.classList.add('sDown');
    } else if (currentScroll < lastScroll && body.classList.contains('sDown')) {
      // up
      body.classList.remove('sDown');
      body.classList.add('sUp');
    }

    lastScroll = currentScroll;
  };
}

/***/ }),

/***/ "./src/js/component/two-cols.js":
/*!**************************************!*\
  !*** ./src/js/component/two-cols.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return twoColsImageResize; });
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function twoColsImageResize() {
  var twoCols = _toConsumableArray(document.querySelectorAll('.two-cols'));

  var mobileWidth = 720;
  var windowWidth;
  twoCols.forEach(function (el, i) {
    var media = el.querySelector('.two-cols__media');
    var content = el.querySelector('.two-cols__content');
    var mediaHeight;
    var contentHeight;

    var onLoadFunction = function onLoadFunction() {
      resizeFunction();
      window.addEventListener('resize', resizeFunction);
    };

    var resizeFunction = function resizeFunction() {
      mediaHeight = media.clientHeight;
      contentHeight = content.clientHeight;
      windowWidth = window.innerWidth;

      if (mediaHeight < contentHeight && windowWidth > mobileWidth) {
        media.classList.add('resized');
      } else if (mediaHeight > contentHeight && windowWidth < mobileWidth) {
        media.classList.remove('resized');
      }
    };

    window.addEventListener('load', onLoadFunction);
  });
}

/***/ }),

/***/ "./src/js/script.js":
/*!**************************!*\
  !*** ./src/js/script.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var regenerator_runtime_runtime__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! regenerator-runtime/runtime */ "./node_modules/regenerator-runtime/runtime.js");
/* harmony import */ var regenerator_runtime_runtime__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(regenerator_runtime_runtime__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _component_modal_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./component/modal.js */ "./src/js/component/modal.js");
/* harmony import */ var _component_stickyNav_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./component/stickyNav.js */ "./src/js/component/stickyNav.js");
/* harmony import */ var _component_carousel_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./component/carousel.js */ "./src/js/component/carousel.js");
/* harmony import */ var _component_gradient_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./component/gradient.js */ "./src/js/component/gradient.js");
/* harmony import */ var _component_two_cols_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./component/two-cols.js */ "./src/js/component/two-cols.js");
//import "core-js/stable";





 // Your scripts here

Object(_component_modal_js__WEBPACK_IMPORTED_MODULE_1__["default"])();
Object(_component_stickyNav_js__WEBPACK_IMPORTED_MODULE_2__["default"])();
Object(_component_carousel_js__WEBPACK_IMPORTED_MODULE_3__["default"])();
Object(_component_two_cols_js__WEBPACK_IMPORTED_MODULE_5__["default"])(); // Gradient Mesh

var gradient = new _component_gradient_js__WEBPACK_IMPORTED_MODULE_4__["Gradient"]();
gradient.initGradient('#gradient-canvas');

/***/ })

/******/ });
//# sourceMappingURL=script.js.map