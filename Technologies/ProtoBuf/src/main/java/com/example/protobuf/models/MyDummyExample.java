// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: src/main/proto/addressbook.proto

package com.example.protobuf.models;

public final class MyDummyExample {
  private MyDummyExample() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_protobuf_Course_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_protobuf_Course_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_protobuf_Student_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_protobuf_Student_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_protobuf_Student_PhoneNumber_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_protobuf_Student_PhoneNumber_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n src/main/proto/addressbook.proto\022\010prot" +
      "obuf\"M\n\006Course\022\n\n\002id\030\001 \001(\005\022\023\n\013course_nam" +
      "e\030\002 \001(\t\022\"\n\007student\030\003 \003(\0132\021.protobuf.Stud" +
      "ent\"\352\001\n\007Student\022\n\n\002id\030\001 \001(\005\022\022\n\nfirst_nam" +
      "e\030\002 \001(\t\022\021\n\tlast_name\030\003 \001(\t\022\r\n\005email\030\004 \001(" +
      "\t\022,\n\005phone\030\005 \003(\0132\035.protobuf.Student.Phon" +
      "eNumber\032H\n\013PhoneNumber\022\016\n\006number\030\001 \001(\t\022)" +
      "\n\004type\030\002 \001(\0162\033.protobuf.Student.PhoneTyp" +
      "e\"%\n\tPhoneType\022\n\n\006MOBILE\020\000\022\014\n\010LANDLINE\020\001" +
      "B/\n\033com.example.protobuf.modelsB\016MyDummy" +
      "ExampleP\001b\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
        });
    internal_static_protobuf_Course_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_protobuf_Course_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_protobuf_Course_descriptor,
        new java.lang.String[] { "Id", "CourseName", "Student", });
    internal_static_protobuf_Student_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_protobuf_Student_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_protobuf_Student_descriptor,
        new java.lang.String[] { "Id", "FirstName", "LastName", "Email", "Phone", });
    internal_static_protobuf_Student_PhoneNumber_descriptor =
      internal_static_protobuf_Student_descriptor.getNestedTypes().get(0);
    internal_static_protobuf_Student_PhoneNumber_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_protobuf_Student_PhoneNumber_descriptor,
        new java.lang.String[] { "Number", "Type", });
  }

  // @@protoc_insertion_point(outer_class_scope)
}
