<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.js" integrity="sha512-8RnEqURPUc5aqFEN04aQEiPlSAdE0jlFS/9iGgUyNtwFnSKCXhmB6ZTNl7LnDtDWKabJIASzXrzD0K+LYexU9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.css" integrity="sha512-uf06llspW44/LZpHzHT6qBOIVODjWtv4MxCricRxkzvopAlSWnTf6hpZTFxuuZcuNE9CBQhqE0Seu1CoRk84nQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/gherkin/gherkin.min.js" integrity="sha512-yUQIR7AyIeCOuQ2kFUBJFNd7pt6CbkQXb4HoZHbKa73FikejXCTVMU+ws6wEtOYKVF1MuPUwsHWP5q7WNW2SMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/xml/xml.min.js" integrity="sha512-LarNmzVokUmcA7aUDtqZ6oTS+YXmUKzpGdm8DxC46A6AHu+PQiYCUlwEGWidjVYMo/QXZMFMIadZtrkfApYp/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/addon/fold/xml-fold.min.js" integrity="sha512-3/N6i9E1fOr1I/8Yt3KL9uFeoEcjh3ceFXf83X6vIlElMZEq0LKF1JDYsIJYaZIJeG2YD9TnGCA4KAR2bEbz/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/addon/hint/xml-hint.min.js" integrity="sha512-+ysdToUF7KWua+mgbRPZ5hw0goAzopoVILQ4tejOckvVZV7/7a+Coqo2cTAXAaqkOemp+gz3P6hIzO5Jtys/Jg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
</head>
<body>
    <textarea id="txt">
    Feature: verb and a noun e.g. Apply for a loan, Refund a purchase
	As a type of user
	I want some functionality
	So that businesses benefit

	Background:
		Given a precondition

	Scenario: Some business situation
		Given a precondition
		When some action is taken
		Then some verifiable outcome
    </textarea>

    <textarea id="pytxt">
    *** Settings ***
Documentation     A test for some business situation.
Resource          resource.txt
Library           SomeLibrary

*** Test Cases ***
Some business situation - Test Case <Test Case>
		Given a precondition
		When some action is taken
		Then some verifiable outcome

*** Keywords ***
A precondition
  Go to place
  Initiate a thing
  Verify starting state

Some action is taken
    Interact
    Take action

Some verifiable outcome
    Verify outcome one
    Verify outcome two
    </textarea>

<script>
    var editor = CodeMirror.fromTextArea(document.getElementById('txt'),{
        mode : 'gherkin',
        lineNumbers:true
    });
    var editors = CodeMirror.fromTextArea(document.getElementById('pytxt'),{
        mode : 'robot',
        lineNumbers:true
    })
</script>
</body>
</html>