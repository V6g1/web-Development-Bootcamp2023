import React from "react";
import Header from "./Header";
import Footer from "./Footer";
import Note from "./Note";
import notes from "../notes";
function App() {
  return (
    <div>
      <Header />
      {notes.map((Details) => (
        <Note
          key={Details.id}
          title={Details.title}
          content={Details.content}
        />
      ))}

      <Footer />
    </div>
  );
}

export default App;
