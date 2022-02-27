<h1> NestJS Playground </h1>

<h2> Table of content </h2>

<p>
  <ul>
    <li> <a href=''> Summary </a>  </li>
    <li> <a href=''> Useful </a> </li>
  </ul>
</p>

<h2> Summary </h2>
<p>
  This project contains examples and implementations of core features and principles of NestJS framework.
</p>

<h2> Decorators </h2>
<p>
  Decorators associate classes with required metadata and enable Nest to create a routing map (tie requests to the corresponding controllers).
  <ul>
    <li> <b> @Controller() </b> => Defines a controller class. </li>
    <li> <b> @Injectable() </b> => Attaches metadata, which declares that a class X is a class that can be managed by the Nest IoC container </li>
  </ul>
</p>

<h2> Useful </h2>
<p>
  <strong> Creating CRUD Entity Quickly </strong>
  <br/>
  <code> nest g resource [name] </code>
</p>

<p>
  <strong> Creating Controller Quickly </strong>
  <br/>
  <code> nest g controller [name] </code>
</p>

<p>
  <strong> Creating Service Quickly </strong>
  <br/>
  <code> nest g service [name] </code>
</p>
