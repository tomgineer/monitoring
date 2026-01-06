# CoreWatch

CoreWatch is a lightweight system monitoring platform built around API-based node reporting.

It enables a central dashboard to query multiple nodes (servers, services, or agents) via API and collect their current status, statistics, predictions, and related files. All collected data is presented in a unified monitoring view designed for continuous visibility.

![CoreWatch dashboard](hero.webp)

---

## Overview

CoreWatch periodically sends API requests to registered nodes.
Each node responds with structured information such as:

- System status
- Runtime statistics
- Forecasts or predictions
- Optional attached or generated files

The central interface aggregates this data and displays it in real time.

---

## Dashboard

- Unified monitoring view for all connected nodes
- Full-screen mode for wall displays or monitoring stations
- Optional automatic refresh
- Refresh interval configurable via `apiCalls.json`
- Suitable for permanent, always-on displays

When auto-refresh is enabled, the dashboard updates automatically (for example, every 60 seconds), allowing continuous observation of server and system states.

---

## Configuration

- API polling intervals are defined in `apiCalls.json`
- Refresh timing is fully configurable through parameters
- Nodes only need to expose a compatible API endpoint

---

## Use Cases

- Server and infrastructure monitoring
- Operations and NOC-style dashboards
- Home labs and VPS environments
- Lightweight alternative to heavy monitoring stacks
- Permanent status display on dedicated screens

---

## Design Goals

CoreWatch is built with the following principles in mind:

- Simplicity
- API-first communication
- Low overhead
- Extensibility
- Readability and clarity over complexity

The platform is designed to integrate easily into existing environments without enforcing a rigid architecture.

---

## Project Status

This project is under active development.
Features, APIs, and internal structure may change.

---

## License

MIT License

Copyright (c) 2026 tomgineer

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

---

## Author

tomgineer
